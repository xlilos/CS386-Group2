## Team Project – D.5 Design
By: Ian Ambos, Chase Spigarelli, Nick Nannen, Brandon Roberts, Jonathan Velasco, Peter Galvan

## 1. Introduction

  "Provide 1-2 paragraphs to describe your system. This will help understand the context of your design decisions. 
 You can reuse and update text from the previous deliverables."

  "Grading: 2 points. Criteria: Completeness (1 pt); Consistency with the rest of the document (0.5 pt); Language (0.5 pt)."

- Stress and heavy workload impacts students who need their papers peer reviewed. Often, the consequences include unverified papers and 
documents that have many errors. Peer Pad helps match writers with peers at a similar academic skill level. This way they can receive 
relevant feedback on their papers and projects. Peer Pad is also a great space for people who are interested in reading interesting 
papers for free. The system is different from a lot of other crowdsourcing websites. This system is efficient for students who may be
too shy to share, in a hurry or needing different perspectives in a peer review. We are focused on letting students post their paper and
have them reviewed by people as quickly as possible.
[GitHub](https://github.com/xlilos/CS386-Group2) 
[Trello](https://trello.com/b/D3BnK0n7/peer-pad)

## 2. Architecture

  "Architecture Present a diagram of the high-level architecture of your system. Use a UML package diagram to describe the main modules and 
how they interrelate. See some examples at: [https://www.uml-diagrams.org/package-diagrams-examples.html](https://www.uml-diagrams.org/package-diagrams-examples.html)
Make clear the layers of your architecture (if they exist) as described in: 
[https://www.uml-diagrams.org/multi-layered-application-uml-model-diagram-example.html](https://www.uml-diagrams.org/multi-layered-application-uml-model-diagram-example.html)
Provide a brief rationale of your architecture explaining why you designed it that way."


  "Grading: 5 points. Criteria: Adequate use of UML (1 pt); Adequate design of an architecture for the system (2 pts); 
Adequate description of the rationale (2 pts)."

- We have two main modules, those being servers and are websites. The website has access to everything that will be in the server 
we are running; that is holding are papers and the user current sessions. This diagram Also shows that the user can access 
everything the website has to offer.

![Architecture](https://github.com/xlilos/CS386-Group2/blob/main/deliverables/Media/Deliv_5_Architecture.png)

## 3. Class diagram

  "Present a refined class diagram of your system, including implementation details such as visibilities, attributes to represent
associations, attribute types, return types, parameters, etc. The class diagram should match the code you have produced so far, 
but not be limited to it (e.g., it can contain classes not implemented yet)."

  "The difference between this class diagram and the one that you presented in D.3 is that the last focuses on the conceptual model 
of the domain while the former reflects the implementation. Therefore, the implementation details are relevant in this case."

  "Grading: 6 points. Criteria: Adequate use of UML (2 pts); Adequate choice of classes and relationships (2 pts); Completeness of 
the diagram (1 pt); Adequate presentation of implementation details (1.0)."

![Class Diagram](https://github.com/xlilos/CS386-Group2/blob/main/deliverables/Media/Deliv_5_Class%20diagram.png)

## 4. Sequence diagram

  "Present a sequence diagram that represents how the objects in your system interact for a specific use case. Also include the use 
case description in this section. The sequence diagram should be consistent with the class diagram and architecture. 2"

  "Grading: 5 points. Criteria: Adequate use of UML (1 pt); Adequate design of the sequence diagram (2 pts); Consistency with the 
class diagram (1 pt); Consistency with the use case description (1 pt); Not including the use case description (-1.5 pt); 
Over simplistic diagram (-1 pt)"

(SCREENSHOT HERE)

- Use Case Description
- Use Case: Add paper then upload
- Actor: User
- Description: The user can add and upload their paper to be reviewed
- Preconditions: Have a paper to be uploaded
- Postconditions: The paper is uploaded
- Main Flow:
  - 1. User clicks the upload button
  - 2. User chooses text file to upload
  - 3. User confirms file and file is uploaded
- Alternative Flow:
  - 3b. File is already uploaded and you get notified of this
  - 3c. File is not a text file and you get notified of this 

## 5. Design Pattern

  "Split this section into 2 subsections. For each subsection, present UML class diagrams showing the application of a design 
pattern to your system (a different pattern for each section). Each class diagram should contain only the classes involved in 
the specific pattern (you don’t need to represent the whole system). Choose patterns from two different categories: Behavioral, 
Structural, and Creational. You are not limited to design patterns studied in class. Your system may not be appropriate for any 
design pattern. In this case, for didactic purposes, be creative and extend a little bit the scope of your system to make the 
design patterns appropriate."

  "Grading: 6 points (3 pts each pattern). Criteria: Correct use of the design pattern as described in the literature (1.5 pt); 
Adequate choice of the design pattern (0.5 pt); Adequate implementation of the design pattern (1 pt)."

- Template Method: we can use the template method to allow easy conversions of document types for when a user wants to download them or upload them.

(SCREENSHOT HERE)

- Facade: this pattern allows us to hide the underlying algorithm and complexity of finding a match for paper reviewing behind an easy interface.

(SCREENSHOT HERE)

## 6. Design Principles

  "How does your design observe the SOLID principles? Provide a short description of the following principles giving concrete 
examples from your classes."

  "Grading: 6 points. Criteria: Show correct understanding of SOLID principles (3 pts); Provide enough details to justify how 
the principles were observed (3 pts)."

- "Single Responsibility Principle: This principle is observed by creating classes that only do one thing. An example is our “Comment” class (shown below) which only 
contains information relevant to comments made on papers."

(SCREENSHOT HERE)

- "Open/Closed Principle:  Here we follow the principle that entities should be open for extension, but closed for modification because each time a new rating is 
created it is added automatically. At the same time this is also closed because no changes need to be made when a rating is added to a profile."

(SCREENSHOT HERE)

- "Liskov Substitution Principle: We observe this design principle by extending the class “profile” to multiple subtypes of a profile as shown below which doesn’t alter 
the correctness of our program and makes class hierarchy easier to understand."
(SCREENSHOT HERE)

- Interface Segregation Principle:

(SCREENSHOT HERE)

- 'Dependency Inversion Principle: For this principle we make sure low level and high level classes should rely on abstractions so that flow can go from low to high 
and high to low"

(SCREENSHOT HERE)
