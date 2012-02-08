<?php
 $title = "SIGCSE 2012 - Student Research Competition";
 $onload = "pageLoad('attendees', 'studentResearch');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Student Research Competition</h1>
</div></div>
<ul>
 <li><a href="#graduate">Graduate Student Entries</a></li>
 <li><a href="#undergraduate">Undergraduate Student Entries</a></li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="#graduate">Graduate Student Entries</a></h2>
</div></div>

<p><strong>Deduced Social Networks for Educational Portal</strong><br/>
<em>Monika Akbar, Virginia Tech</em></p>
<p>Educational portals mostly rely on resources. Combining an online community and  analyzing and harnessing the user trends can provide users with more information on how others succeed in the vast information space. The AlgoViz Portal collects metadata on Algorithm Visualizations and provides community support. We show how logs can be used to discover latent relationships between users, deducing an implicit social network. Clustering of the log data allows us to find different page-viewing patterns, giving us an idea about the different groups of users and their information seeking behavior.</p>
 
<p><strong>Student Adherence to Test-First Programming in the Classroom</strong><br/>
<em>Kevin Buffardi, Virginia Tech</em></p>
<p>Virginia Tech employed Web-CAT, an automated testing tool, for several years in CS1 and CS2 classes to introduce and reinforce Test-Driven Design (TDD). Our concern over some students not accepting or adhering to test-first principles drew attention to the need to identify these students' behaviors and the consequential impact on their programs. Our research used Web-CAT data to analyze snapshots of students' work-in-progress to identify testing and development patterns of those not adhering to TDD. Analysis also focused on the relationship between TDD adherence and several measurements of code quality. Based on the results, we drew inferences on possible strategies to improve acceptance and adherence to TDD.</p>

<p><strong>Computing Computational Thinking</strong><br/>
<em>Kyu Han Koh, University of Colorado at Boulder</em></p>
<p>Visual programming with game/simulation creation is one of common approaches to raise computer science interests in K-12 education. Several research papers indicate that motivational benefits of visual programming learning are successfully brought to computer science education, but still it is not clear what kinds of knowledge students have actually learned through making games and/or simulations.  In this research, a method to analyze the semantic meaning of visual programming is provided to support educational benefits of visual programming in computer science education.</p>

<p><strong>CipherXRay: Exposing Cryptographic Operations and  Secrets from Binay Execution</strong><br/>
<em>Xin Li, George Mason University</em></p>
<p>We focus on the technical feasibility of exposing the cryptographic operations and secrets from the execution of a potentially obfuscated binary executable. We build CipherXRay upon one of the defining characteristics of all good cryptographic algorithms - the avalanche effect. CipherXRay is able to not only reliably identify the cryptographic operations, but also accurately pinpoint the location, size and boundary of the input buffer, the output buffer and the cryptographic key buffer. We have evaluated CipherXRay with OpenSSL, KeePassX, Kraken malware and a number of third party programs with built-in compression and checksum. Our results demonstrate that current implementations of cryptographic algorithms achieve virtually no secrecy if their execution can be monitored.</p>

<p><strong>An Analysis of Optimizing Power-Performance on Multi-core CPUs</strong><br/>
<em>Vijayalakshmi Saravanan, Ryerson University</em></p>
<p>Our thesis proposal is to investigate the optimum power/performance of multi-core processors. This state-of-the-art report is examined in two different architectures such as multi-thread and multi-core in terms of power and performance gains: (a) to find the optimum number of processor cores in such architectures based on instructions per cycle (IPC) and (b) to present an efficient buffered LR (Left-Right) algorithm for pipeline stall reduction which reduces the power consumption and maximizes the CPU utilization (i.e., throughput). We describe the experimental setup and simulators required to verify the results and then propose a benchmark for the design of multi-core processors.</p>

<p><strong>Dynamic Test Input Generation for Database Applications to Achieve High Mutation Score</strong><br/>
<em>Tanmoy Sarkar, Iowa State University</em></p>
<p>Traditionally automatic generation of test inputs focuses on achieving high block or branch coverage and then assessing the adequacy of the generated test inputs is done by mutation testing. It is a technique where typical programming errors are replicated by modifying actual program and then checking whether (or to what extent) a test suite can distinguish between the actual program and its modified version.   The modified versions are referred to as the mutants. Mutation testing of test suits for database applications presents an interesting and important challenge. Database applications consists of complex programming constructs as in typical applications and also consists of embedded SQL queries in various application paths. Mutants in such applications can be realized by not only modifying original program but also by modifying the embedded SQL queries. The objective of mutation testing in database applications, therefore, to check whether a given test suit can distinguish the actual application from its mutants. While mutation testing for typical program and for SQL queries exist, research in the field of mutation testing for database applications which combines both these aspects is still in a state of infancy. In this work, we propose to address the problem of mutation testing for database application by developing an automated test case generation technique which not only will provide high degree of branch coverage but also will achieve high SQL mutation score.</p>

<p><strong>Using Refactoring to Achieve Quality Without A Name</strong><br/>
<em>M. Edward Wilborne, III, North Carolina State University</em></p>
<p>Mapping Christopher Alexanderís fifteen principles of good design to Martin Fowlerís behavior preserving code transformations, known as Refactoring, may result in code that has Alexander's “quality without a name”.  This research will provide programmers a guide to improving the quality of object oriented code without the program resorting to making random refactorings.</p>

<div class="SectionHeader"><div class="Full">
<h2>Undergraduate Student Entries</h2>
</div></div>

<p><strong>Evaluating Relevance Metrics for Search in Personalized Network Spaces</strong><br/>
<em>Anthony Bentancur, University of North Carolina at Charlotte</em></p>
<p>In Personalized Network Spaces (PNets) people have access to an abundant amount of that originates from people and devices embedded within the surrounding environment. Users and applications that utilize information in these settings require the ability to get information about the "here" and "now", exhibiting tight spatiotemporal integration. We propose Gander, a personalized search engine that allows users to perform search of the "here" and "now" in the "here" and "now"; in other words, Gander supports dynamic search of the rapidly changing environment without reliance on a centralized index or connection to the Internet. The contribution of this work is the creation and evaluation of Gander relevance metrics that describe desirable spatiotemporal properties of data, and are used to order the search results for presentation to the search user. In this work, I create two new relevance metrics and evaluate their effectiveness in ordering results by incorporating them into Gander queries that are executed over a PNets environment. The two relevance metrics that I designed and implemented rank results for a search query for amusement park rides in order of: 1) rides that the user has not ridden and 2) rides near a bench. The NDCG values from evaluating these two relevance metrics were around .70 and .80 respectively.  Our results, measured in terms of Normalized Discounted Cumulative Gain, show that our spatiotemporal relevance metrics provide high degrees of utility to Gander users.</p>

<p><strong>Exploring Text-Based Analysis of Test-Case Dependencies of Web Applications</strong><br/>
<em>Camille Cobb, Washington and Lee University</em></p>
<p>Test cases formulated from user sessions of a web application often depend on what happened in a previous session to the shared, persistent application state. When ordering test suites, these dependencies must be maintained to avoid predominantly executing error code. This work explores the feasibility of computing dependencies directly from the test cases. We propose a novel text-based analysis of the URL requests. Our exploratory study of URL requests to five deployed web applications suggests that resources contain textual clues useful for estimating test-case dependencies. The results provide a foundation to implement a test-case dependency model that uses a text-based analysis approach to identify dependencies and an arranger that uses the model to automatically order test suites.</p>

<p><strong>Improving the Flexibility of JFLAP through Presentation of Explicit Formal Definitions and Symbol Alphabets</strong><br/>
<em>Julian Genkins, Duke University</em></p>
<p>Java Formal Languages and Automata Package (JFLAP) is a software visualization suite focused on the canonical concepts of a course in Formal Languages and Automata (FLA) Theory. The software eases the construction, modification, and testing of FLA algorithms and machines, catalyzing learning. Recent additions to JFLAP include a formal definition component which highlights the elements that formally underlie a given automata or grammar. This includes a panel corresponding to any symbol alphabets associated with a formal definition which allows for more varied, complex definitions while retaining backwards compatibility. This new system makes explicit much of the work previously done implicitly by JFLAP, encouraging greater user interaction and providing more rapid, productive feedback.</p>

<p><strong>Using Static Analysis to Evaluate Student Code</strong><br/>
<em>Alexandra Johnson, Carnegie Mellon University</em></p>
<p>The automated assessment of student code is beneficial both for the learners and for the course staff.  Students benefit from the immediate feedback and reduction of metacognitive requirements of early programming assignments, while course staff reclaim hours of tedious grading.  Although important, current implementations of assessment tend to be course grained and focus more on the functionality (or lack thereof) of a solution than the knowledge a student has demonstrated.  In this work we evaluate the use of a static analysis technique, abstract syntax trees, combined with JUnit testing to award partial credit to incorrect program solutions.  Results show a significant improvement with the use of ASTs in automated program assessment.</p>

<p><strong>Teaching Computer Science Concepts Through Educational Games Using Social Aspects Within Peers</strong><br/>
<em>Javier Olaya, Kean University</em></p>
<p>The demand of computer science is growing and unfortunately the early college students are avoiding 
this degree. Production of Computer Science degrees are declining and the consequences are low participation of under-represented groups. The largest group currently is women and this is a loss to the computer science field. The students that come straight to university with no experience in programming have more difficulty accomplishing computer science assignments. Therefore, it is necessary for these students to find ways to enhance their learning. This research assesses the effectiveness of learning computer science lessons through an educational game.</p>

<p><strong>Cloud Filter</strong><br/>
<em>Mateus Oliveira The College of New Jersey </em></p>
<p>Cloud Filter is a research project conducted at the University of Calgary that serves to question the security capabilities of cloud services. The primary issue that we targeted is the lack of fine-grain filtering of data storage. Services, such as Amazon S3, limit users to only a handful of locations where data can be stored. We suspect that this is because these cloud services do not have the hardware capabilities to support this security mechanism to all of its users. To test our hypothesis, we created our own Cloud Filtering Linux Kernel Module to implement this location control management.</p>

<p><strong>Metaphor:  A Declarative Approach to Computational Art</strong><br/>
<em>Jaimie  Sauls, University of Arizona</em></p>
<p>Computer science is misrepresented as a science and such misperceptions may contribute to students' negative views and reluctance to join this field of study. The Laboratory for Computer Science creates online lessons for high school students that introduce computing theories in an interactive way. This study examines how students' perceptions of computer science change upon completion of these labs. The focus is on the students' perspective of computer science and their place in the field irrespective of their identification with a specific minority group. Identifying whether the stigmas or stereotypes are present with the students that experience these lessons and whether a deeper knowledge of the underlying theories in computer science will change these views is the goal.</p>

<p><strong>Modeling the Power Consumption of Computer Systems with Graphics Processing Units (GPUs)</strong><br/>
<em>Stephanie Schmidt, Sonoma State University</em></p>
<p>To help optimize computer systemsí energy efficiency, researchers have developed models relating these systemsí instantaneous power consumption to resource utilization metrics available in software. Existing power models assume the major consumers of dynamic power are the central processing unit (CPU), memory and disk. The increased use of graphics processing units (GPUs) for general-purpose computing compromises this assumption. Therefore, models that exclude the GPU may significantly mispredict power consumption. I built full-system power models for two GPU-equipped machines in order to test this hypothesis. This research is the first to quantify: the inaccuracy of traditional high-level system power models for GPU workloads; the benefits of including GPU metrics in a full-system power model when applied to both GPU and non-GPU workloads; and the sensitivity of the model to the specific choice of GPU metrics.</p>

<p><strong>Four-dimensional mapping with mobile robotics and RGB-D sensors</strong><br/>
<em>Tanner Schmidt, Duke University </em></p>
<p>Mapping with mobile robots in both two and three dimensions has been an active area research and has produced many great results. However, the environments in which robots operate are often dynamic. Adding time as a fourth dimension to the mapping problem allows robotic systems to track changes in their surroundings. This can be accomplished via extension the octree data structure, by inserting a map between parent nodes and their children such that the subtree of a given node at any point in time can be accessed by selecting from the map the node that was valid at that time. This method is efficient in that it does not increase the depth of the octree. This data structure can then be queried to determine the state of the environment in the past or to analyze changes to the map.</p>

<p><strong>Experimentally Exploring Algorithmic Descriptions of Three-Dimensional Geometry</strong><br/>
<em>Elizabeth Skiba, SUNY Geneseo</em></p>
<p>GUI based software is the traditional tool for describing complex geometry, however I hypothesize that algorithmic descriptions are superior for reasons including their ability to reuse pieces of geometry. I designed an experiment to compare three geometry description tools. Descriptions were generated manually, through the use of a GUI, and algorithmically.  I specifically investigate their strengths and weaknesses when changing a pre-existing geometry. I measured a ratio of initial size of the description to size of a change to that description. Results suggest that algorithmic description has significant advantages over other methods of describing changes to geometry.</p>

<p><strong>PICS: Platform Independent Cloud Scripting </strong><br/>
<em>Kelly Smith, Slippery Rock University</em></p>
<p>Previous work in minimizing the inherent difficulties of parallel programming has yielded three popular methods for automated, scaled parallelization: OpenMP, MPI, and CUDA.  This research borrows much of its philosophy from these methods, adds parallel language constructs to JavaScript, and provides a general-purpose framework for spawning algorithms to a heterogeneous, platform-independent cloud of processing entities including mobile devices.  Currently the cloud consists of clients on the following platforms: Windows, Linux, OSX, Android, and any modern web browser.  Initial results have been encouraging, and this framework has proven to be effective in bringing parallel computing to untapped computing resources.</p>

<p><strong>Modular Program Design and Verification in RESOLVE</strong><br/>
<em>Daniel Welch, Denison University</em></p>
<p>In 2003, Sir Charles Anthony Hoare issued a challenge to the computing community at large to construct a verifying compiler. To answer this challenge, a language named RESOLVE was developed to not only achieve the goal of verification, but also create a language supportive of modular, reuse-oriented, software design principles.  To determine the developmental state of RESOLVE in relation to this vision, we implement Kruskal's minimum spanning tree algorithm as proof of concept. This algorithm, due to its reliance of multiple components, presents an opportunity to test RESOLVE's new verifier and compiler on a sufficiently complicated project.</p>

<p><strong>Matching XML Schema Documents</strong><br/>
<em>William West, The College of New Jersey</em></p>
<p>With the dynamic nature of databases, there is a growing need to re-organize and combine sets of data. While the combination of two or more data sets is often done manually, this can become a costly and time-consuming process. Thus, automatic methods of database schema matching become necessary. XML is unique in its use of a tree-like structure and strictly defined element, hence requiring its own matching algorithms to achieve optimal accuracy. In this paper, we focus on developing an XML schema matcher in Java. A schema matching framework is outlined in detail, using two standard XSD schemas as examples. We find that through the use of existing Java libraries and external APIs, a custom and fully functional XML schema matcher can be successfully developed in Java.</p>



<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>