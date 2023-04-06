CREATE TABLE Role (
  RoleID INT PRIMARY KEY AUTO_INCREMENT,
  RoleName VARCHAR(50) NOT NULL
);

CREATE TABLE Department (
  DepartmentID INT PRIMARY KEY AUTO_INCREMENT,
  DepartmentName VARCHAR(50) NOT NULL
);

CREATE TABLE Staff (
  StaffID INT PRIMARY KEY AUTO_INCREMENT,
  FullName VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Password TEXT NOT NULL,
  RoleID INT NOT NULL,
  DepartmentID INT NOT NULL,
  FOREIGN KEY (RoleID) REFERENCES Role(RoleID),
  FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID)
);

CREATE TABLE Deadline (
  DeadlineID INT PRIMARY KEY AUTO_INCREMENT,
  ClosureDate DATETIME NOT NULL,
  Deadline DATETIME NOT NULL
);

CREATE TABLE Topic (
  TopicID INT PRIMARY KEY AUTO_INCREMENT,
  TopicIDName VARCHAR(50) NOT NULL,
  Description VARCHAR(200) NOT NULL,
  CreateDate DATETIME NOT NULL,
  DeadlineID INT NOT NULL,
  FOREIGN KEY (DeadlineID) REFERENCES Deadline(DeadlineID)
);

CREATE TABLE Idea (
  IdeaID INT PRIMARY KEY AUTO_INCREMENT,
  Title VARCHAR(100) NOT NULL,
  Content VARCHAR(1000) NOT NULL,
  is_anonymous BOOLEAN NOT NULL default FALSE,
  CreateDate DATETIME NOT NULL,
  StaffID INT NOT NULL,
  TopicID INT NOT NULL,
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
  FOREIGN KEY (TopicID) REFERENCES Topic(TopicID)
);

CREATE TABLE Document (
  DocumentID INT PRIMARY KEY AUTO_INCREMENT,
  DocumentPath VARCHAR(100),
  IdeaID INT,
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID)
);

CREATE TABLE Vote (
  VoteID INT PRIMARY KEY AUTO_INCREMENT,
  Status BOOLEAN,
  IdeaID INT NOT NULL,
  StaffID INT NOT NULL,
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID),
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);

CREATE TABLE Comment (
  CommentID INT PRIMARY KEY AUTO_INCREMENT,
  CommentContent VARCHAR(500) NOT NULL,
  StaffID INT NOT NULL,
  IdeaID INT NOT NULL,
  is_anonymous BOOLEAN NOT NULL default FALSE,
  CreateDate DATETIME NOT NULL,
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID)
);


INSERT INTO Department (DepartmentID, DepartmentName) VALUES
(1, 'Academy'),
(2, 'Office of Student Affairs'),
(3, 'Marketing'),
(4, 'Support'),
(5, 'IT'),
(6, 'Finance');

INSERT INTO Role (RoleID, RoleName) VALUES
(1, 'Quality Assurance Manager (QAM)'),
(2, 'Quality Assurance Coordinator(QAC)'),
(3, 'Staff');


INSERT INTO Staff (StaffID, FullName, Email, Password, RoleID, DepartmentID) VALUES
(1, 'QAM', 'QAM.greenwich@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 1, 1),
(2, 'QAC', 'QAC.greenwich@gmail.com', '$2y$10$pjaXpyOBJ9Y964u7E4GWv.wy2IMbLdhd/Wj9vSmw4o/UxI8ya6V2C', 2, 1),
(3, 'Le Chi Luan', 'chiluan6601@gmail.com', '$2y$10$FlkAQm89yKb4/sOpNEM8UOkPxu.deAdb4vFRq6OAs74aaG5F7vIOu', 3, 2),
(4, 'Le Trung Kien', 'trungkien@gmail.com', '$2y$10$jukBN3dfGBBjR2RsYz9geuZsbUwPMZnVbb1H7Cj1IoaG0jYMOdciy', 3, 3);