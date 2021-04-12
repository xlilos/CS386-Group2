## Deliverable 6: Implementation 2
By: Ian ambos, Peter Galvan, Chase Spigarelli, Nick Nannen, Brandon Roberts and Jonathan White Velasco

## 1. Introduction Provide 1-2 paragraphs to describe your system. This description should contain the value proposition and the main features. At the end of the introduction, include links to your project on GitHub and Trello, which should be up to date.

- Stress and heavy workload impacts students who need their papers peer reviewed. Often, the consequences include unverified papers and 
documents that have many errors. Peer Pad helps match writers with peers at a similar academic skill level. This way they can receive 
relevant feedback on their papers and projects. Peer Pad is also a great space for people who are interested in reading interesting 
papers for free. The system is different from a lot of other crowdsourcing websites. This system is efficient for students who may be
too shy to share, in a hurry or needing different perspectives in a peer review. We are focused on letting students post their paper and
have them reviewed by people as quickly as possible.
[GitHub](https://github.com/xlilos/CS386-Group2) 
[Trello](https://trello.com/b/D3BnK0n7/peer-pad)

Grading criteria (2 points):
- Clear description with adequate use of language (0.2 points) 
- The description is consistent with the current state of the project (0.5 points) 
- Presence of links to GitHub and Trello (0.3 points)
- Up-to-date Trello board (1 point) 

## 2. Implemented requirements List in this section the requirements (user stories, issues, or use cases) that you implemented for this release. For each requirement, include: - Link to the card on Trello that describes the requirement - Name of who implemented the requirement and link to the pull request on GitHub that refers to this implementation. - Name of who reviewed and approved the pull request. - A print screen that depicts the implemented feature (if applicable). Remember that all source code should be submitted by means of pull requests and the quality assurance person in the team should review and approve each pull request. For more information about pull requests: [https://help.github.com/articles/about-pull-requests/](https://help.github.com/articles/about-pull-requests/)

- Implementers(S): Peter Galvan, Jonathan White Velasco and Brandon Roberts
- Name of Reviewer/Approver: Nick Nannen
- [Trello Card](https://trello.com/c/pT5GZxpj/51-reviewee-use-case-post-paper)
- [Pull Request](https://github.com/xlilos/CS386-Group2/pull/38) Changed format a little bit for unique value. That is put on the 
document in a later pull request explained below. However, the main pull request is linked.
- Description of what was done: We came up with adding a unique ID with the date() function. This gives us the month, day, hour, 
minute, second and year the document was created.

Showing a successful upload of file with a unique value:

![Screenshot 1](https://github.com/xlilos/CS386-Group2/blob/main/deliverables/Media/D.6_part_2_requirement_1.png)

- Implementers(S): Peter Galvan, Jonathan White Velasco and Brandon Roberts
- Name of Reviewer/Approver: Jonathan White Velasco for 1st pull request and Nick Nannen for 2nd pull request
- [Trello Card](https://trello.com/c/SKwyRnxZ/53-reviewer-use-case-review-paper)
- [Pull Request for Choose file You Graded and Upload File You Graded button](https://github.com/xlilos/CS386-Group2/pull/40), 
[Pull Request for Get File To Review button](https://github.com/xlilos/CS386-Group2/pull/41)
- Description of what was done: We focused on getting the reviewer to be able to get a paper to grade and being able to submit that 
paper after grading.

For Get File part showing downloading to computer:

![Screenshot 2](https://github.com/xlilos/CS386-Group2/blob/main/deliverables/Media/D.6_part_2_requirement_2_picture_1.png)

For Choose File You Graded and uploaded part of the final screen received for giving back paper:

![Screenshot 3](https://github.com/xlilos/CS386-Group2/blob/main/deliverables/Media/D.6_part_2_requirement_2_picture_2.png)

- Implementers(S): Chase Spigarelli, Nick Nannen and Ian Ambos
- Name of Reviewer/Approver: Peter Galvan
- [Trello Card](https://trello.com/c/k7oOhLhX/54-reviewee-use-case-get-paper-back)
- [Pull Request for searching for a paper](https://github.com/xlilos/CS386-Group2/pull/43)
- Description of what was done: Added functionality for the user to search a paper that they want to look at/grade. Document is found using the filename generated at submission.

Enter text file name to search for:

![Screenshot 4]()

File is found and downloaded:

![Screenshot 5]()

File is just how we left it:

![Screenshot 6]()

Tells user when the file is not found:

![Screenshot 7]()

Grading criteria (13 points): 
- Amount of work put into the implementation (it is expected that all members contribute with non-trivial implementation) (5 points) 
- Adequate workflow (description of the requirement on the Trello board, submission of the implemented requirement as a pull request, 
review of the pull request by another developer) (5 points) 
- Adequate description of the implemented requirements per the instructions (3 points)

## 3. Demo Include a link to a video showing the system working.

- [Demo](https://www.youtube.com/watch?v=f7oXaZ6qgGQ)

Grading criteria (13 points):
- Relevance of the demonstrated functionalities (4 points) 
- Correctness of the functionalities (3 points)
- Quality of the developed system from the external point of view (user interface) (3 points) 
- Quality of the video (3 points) 

## 4. Code quality Describe how your team managed code quality. What were your policies, conventions, adopted best practices, etc. to foster high quality code?

- We work in groups. We split up by task. One group focused on the reviewer use case and the other group focused on the reviewee use case.
- We used pair programming. So, we had at least 2 people focused on the code, which would lead to less error due to more eyes on the code.
- Every weekly meeting we go over the code that was recently published to make sure there is no code we want to change due to quality issues.

Grading criteria (4 points): 
- Adequate list of practices that were adopted to improve code quality (3 points) 
- Clear description with adequate use of language (1 point)

## 5. Lessons learned In retrospective, describe what your team learned during this second release and what would you change if you would continue developing the project.

- We struggled with PHP. It was a very new programming language to all of us. We decided as a group that we really are not a fan of PHP so we would look for a different language to do our backend work.
- At the beginning of the year we had one idea that we were set on that would be our final project. That had to change. We would end up changing it to better our layout and functionality down the road. The big thing is that we would like to be more flexible in the future then have one goal and nothing else to fall back on.

Grading criteria (3 points): 
- Adequate reflection about problems and solutions (2.5 points) 
- Clear description with adequate use of language (0.5 point)
