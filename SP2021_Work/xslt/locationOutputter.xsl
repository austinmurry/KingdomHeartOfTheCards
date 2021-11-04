<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    xmlns:math="http://www.w3.org/2005/xpath-functions/math"
    xmlns:xd="http://www.oxygenxml.com/ns/doc/xsl"
    exclude-result-prefixes="xs math xd"
    version="3.0">

    <xsl:output method="text"/>
    <xsl:variable name="distinctLocations" as="xs:string+" select="//cutscene/@location => distinct-values() => sort()"/>    
     <xsl:template match="/">
        
         <xsl:for-each select="$distinctLocations">
         <xsl:text>"</xsl:text><xsl:value-of select="current()"/><xsl:text>"</xsl:text>
             <xsl:text>&#10;</xsl:text>
     </xsl:for-each>
     </xsl:template>

</xsl:stylesheet>