Steps for marking up Kingdom Hearts Scripts

1. `\n{3,}` replaced 3 or more new lines with 2
2. `</pre><pre id="faqspan-2">` found and replaced these with nothing.
3. `(^.+?)(\n\n)` Had dot matches all on and replaced it with `<sp>\1</sp>\2`
4. `(<sp>)(.+?)` putting speaker tags in and replaced it with `\1<speaker>\2</speaker>`
4. `(<sp>)([VIX0-9].+?)\n` Finds all the organization 13 characters before they had known names and replaced it with `\1<speaker>\2</speaker>`
6. `<sp>\((.+?)\)</sp>` Makes the cutscenes into sections `</cutscene>\n<cutscene><desc>\1<desc>` and after replacing, go to the top of the document and cut and paste the beginning end tag to the bottom of the document.
