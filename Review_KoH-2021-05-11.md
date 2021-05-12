## Kingdom Hearts Text Analysis Project: Review

* Site publication: <https://beeplosion.github.io/KingdomHeartOfTheCards/>
* GitHub: <https://github.com/Beeplosion/KingdomHeartOfTheCards>
* Developers: Jesse Beckwith, Austin Murry, Sebastian Ortiz
* Date of Evaluation: 2021-05-11
* Evaluated by: @ebeshero

### Project orientation and research questions
This team bonded well around shared intense interest in these games. The markup decisions made querying your work a little complex, and that could have used some discussion on your site, since your markup and prepartion of the game scripts is the foundation of the analysis you worked on. That said, you made some good decisions to link out the original source for your scripts. You tell us on the start (index.html) page what kinds of analysis you're providing, but what's lacking across the site is *discussion* of what you learn from the analysis. What did you learn about the nouns featured, and about the speaking characters and their interactions in the game? 

### Analysis
 Excellent work with embedding static graphs of your Python NLP charts and networks. Your subnetworks are super clear (following Goofy and Donald to move us beyond the inevitably super central Sora!). I especially appreciate your explanation of the edge thickness on these networks, but “communication” is not necessarily the reason for those connections, is it?

What’s missing is an explanation of *how* the data was pulled, and that's difficult to provide without some representation the code structure you designed to work with. In representing the top 10 nouns in the first game, and then *all* the games, does this represent speaking parts only, or does it also include "stage directions"...cut scenes?  You need to discuss the code structure to make clear what these graphs represent. And you should provide more of them. (Why not a graph of the top 10 nouns for the 2nd and 3rd games, as well as the first? Fans of the game might want to compare them to each other.

I know this team has created many more graphs than you shared on the site. Some of the networks included cut scenes and some excluded them and looked at only interactions during active game play. You should explain what these interactions mean: do they actually mean direct communication? As I recall, your networks were simply based on whether a speaker was a *first preceding neighbor to either side of a character*. That conceivably means that someone was NOT a direct communicator, so this should really be updated on the site to prevent misunderstanding. 


### Website design and user experience
The website is beautifully designed to feature the Kingdom of Hearts Chain of Memories graphic, without letting it disrupt your text and project images. Site navigation is easy to follow. 

## Conclusion
This team worked hard through the semester, and I know you learned a lot. The website you produce never can show everything you did, but this one could really include more graphs, and most importantly, more discussion of a) the structural markup you created, and b) the significance of your analyses: both what we learn and what we're not sure about. 
