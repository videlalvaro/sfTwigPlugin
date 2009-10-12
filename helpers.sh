#/bin/sh

#./helpers.sh /path/to/syfmony/lib/helper/


mkdir -p ./lib/extensions/

for file in ${1}*Helper.php; do

BNAME=`basename $file`
CNAME=`echo $BNAME | sed 's/Helper.php//'`

sed -E -n 's/^function ([^_][[:alnum:]_]+)\(.*$/\1/p' $file | awk -v classname=$CNAME '

BEGIN {
  print "<?php\n"
  print "class " classname "_Twig_Extension extends Twig_Extension"
  print "{"
  print "  public function getFilters()"
  print "  {"
  print "    return array("
}

{ printf("              \"'%s'\" => array(\"'%s'\", false),\n", $0, $0); }

END {
  print "            );"
  print "  }\n"
  print "  public function getName()"
  print "  {"
  printf("    return \"%s\";\n", tolower(classname));
# print "    return '" classname "';"
  print "  }"
  print "}"
}

' > "./lib/extensions/${CNAME}_Twig_Extension.class.php"

done

for extensionclass in ./lib/extensions/*class.php; do
  php -l $extensionclass
done