## Team Project – D.4 Implementation 1
By: Ian Ambos, Chase Spigarelli, Nick Nannen, Brandon Roberts, Jonathan Velasco, Peter Galvan

1. Introduction

“Provide a short paragraph that describes your system. This paragraph should contain the value proposition and the description of the main features of the software. At the end of the introduction, include links to your project on GitHub and Trello.”

- Stress and heavy workload impacts students who need their papers peer reviewed. Often, the consequences include unverified papers and documents that have many errors. Peer Pad helps match writers with peers at a similar academic skill level. This way they can receive relevant feedback on their papers and projects. Peer Pad is also a great space for people who are interested in reading interesting papers for free. The system is different from a lot of other crowdsourcing websites. This system is efficient for students who may be too shy to share, in a hurry or needing different perspectives in a peer review. We are focused on letting students post their paper and have them reviewed by people as quickly as possible.
[GitHub](https://github.com/xlilos/CS386-Group2) 
[Trello](https://trello.com/b/D3BnK0n7/peer-pad)

2. Implemented requirements

“List in this section, the requirements (user stories, issues, or use cases) that you implemented for this release. We expect that you implement/prototype features you specified in your MVP (c.f. D.2 Requirements). Include who worked on each of the features. We expect that all the members of the group have been involved in some programming activities. BTW, we will check if you are using your issue tracker to manage the implementation tasks.” 

- Use Case focus on for Implementation Peer Reviewee posts paper
- MVP
  - Simple comment feedback system where users can post their papers and someone can review it and leave feedback.
- Implementation
  - Focusing on letting the users be able to upload their paper to the web server.
  - HTML for this assignment:  Ian Ambos and Nick Nannen
  - CSS for this assignment: Peter Galvan and Chase Spigarelli
  - JavaScript/PHP for this assignment: Jonathan Velasco and Brandon Roberts

3. Adopted Technologies

“List the adopted technologies with a brief description and justification for choosing them.”

- Html
  - We chose this technology because we are making a website and Html is the structure of our website.
- CSS
  - We chose this technology because we are making a website and CSS will let us style the website the way we want it.
- JavaScript
  - We chose this technology because it is something we are all familiar with and is a great way to put actions on a website for the user to have a button to upload papers and many other things.
- Filezilla
  - We chose this technology so we can move finished files on github to the server that is running the website.
- Raspberry Pi
  - We chose this technology to be the server because we are more familiar with this technology then AWS and it has all the features we will need. 
- GitHub
  - We chose this because it is a widely adopted technology that offers a great and easy way to update code without having emails switching back and forth.
- Trello
  - We chose this so we can have an easy way to keep track of many things. For example: roles for the week, deliverables and much more.

4. Learning/training

“Describe the strategies employed by the team to learn the adopted technologies.” 

- We have been asking each other questions if someone knows the answer. If not, we use many resources from Youtube, Stack Exchange and much more. If someone finds the answer, we decide a time for that person to explain the solution and let people ask questions if needed during a meeting. If not, we have a discord where we can discuss the article, video, etc.

5. Deployment

“Describe how you are deploying your system in production. Remember that AWS Educate offers free credits for students. See the tutorial at https://dockercurriculum.com/ on how to create a container and deploy it on AWS. Provide a link for the system in production”

- We have the system up and running. We are using a group member’s Raspberry Pi as a server to run the website we will be using for Peer Pad.

6. Licensing
“Inform the license you adopted for your source code (remember to configure GitHub accordingly). Explain why you adopted this license. For more information, check [https://choosealicense.com/](https://choosealicense.com/) and [http://redhat.slides.com/glikins/open-sourcelicensing-101#/](http://redhat.slides.com/glikins/open-sourcelicensing-101#/)”

- We choose the MIT license because we want anyone to be able to add on to our work in any way that fits their needs.

7. “You should also prepare your repository for receiving new contributors. See an example of a Redme.md file at https://gist.github.com/PurpleBooth/109311bb0361f32d87a2 Besides the Readme.md file, your repository should contain a CONTRIBUTING.md file, a LICENSE file, and a CODE_OF_CONDUCT.md file. Search online for some examples of these files. In this section of the deliverable, put links to these files on GitHub.
In the Readme file, the current version should be stated. You should follow the Semantic Versioning schema [(https://semver.org/)](https://semver.org/). Tag the GitHub repository accordingly [(https://git-scm.com/book/en/v2/Git-Basics-Tagging)](https://git-scm.com/book/en/v2/Git-Basics-Tagging).

- [README.md](https://github.com/xlilos/CS386-Group2/blob/main/README.md)
- [CONTRIBUTING.md](https://github.com/xlilos/CS386-Group2/blob/main/CONTRIBUTING.md)
- [LICENSE](https://github.com/xlilos/CS386-Group2/blob/main/LICENSE)
- [CODE_OF_CONDUCT](https://github.com/xlilos/CS386-Group2/blob/main/LICENSE)

8. Look & feel

“Describe the approach you adopted to design your user interface. Include some screenshots.”

* ![Look and Feel](Deliv_4_Look_and_feel.png)
We are big fans of dark mode styles so we went with a black and grey design. We also want something very simple for the user to navigate so we went with a super simple UI.

9. Lessons learned

“In retrospective, describe what your team learned during this first release and what you are planning to change for the second release.”

- We ran into some issues which were expected. Originally, we were going to use GitHub pages for our website but we noticed that we could not use PHP so we could not save the file to GitHub repository. So, halfway through the project we made a decision to switch to a server that we are running on a Raspberry Pi. This gives us access to PHP and everything else we will need. Other than that it was smooth sailing.

10. Demo

“Include a link to a video showing the system working”
