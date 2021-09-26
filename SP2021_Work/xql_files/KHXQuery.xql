xquery version "3.1";
let $KingdomHearts := collection('/db/kingdomofhearts')
let $speakers := $KingdomHearts//speaker
let $speakerNonPars := $speakers[matches(., "^[^(]+$")]/text()[matches(., "\S+")]
let $speakerPars := $speakers[matches(text(), "\s+\(.+?\)")] ! tokenize(., "\s+\(.+?\)")[1] ! normalize-space() 
(: ebb: Some of your speakers have untagged parentheses in them, as in <speaker>Sora (thinking)</speaker>. So this $speakerPars variable collects those and gets just the name before the parentheses. :)
let $allSpeakers := ($speakerPars, $speakerNonPars) => distinct-values()
for $a in $allSpeakers
let $gameTitles := $KingdomHearts[.//speaker/text() ! tokenize(., "\s+\(.+?\)")[1] ! normalize-space() = $a]//title
for $g in $gameTitles
let $sp := $KingdomHearts[.//title = $g]//sp[.//speaker/text() ! tokenize(., "\s+\(.+?\)")[1] ! normalize-space() = $a]
let $countSp := $sp => count()
let $stringLength := $sp ! normalize-space() ! string-length() => sum()
order by $stringLength ascending
where $countSp > 10
return $a || ", "  ||  $countSp (: Source node attribute :)  || ", " || $stringLength (:Source node attribute :) || $g  (:Target node:) || "gameTitle"

(: Idea 1: Probably not great: Try remixing this data so that you have an Edge of cutscenes. Instead of going game by game in lines 9 and 10; change it to look inside cutscenes only.  :)

(: Idea 2: Try a simple co-occurrence network that looks to the first or second preceding::speaker and to the first or second following::speaker and output a concatenated line for each connection. For example, which characters turn up the most frequently nearby Sora?   (Dr. B likes this idea.) :)





