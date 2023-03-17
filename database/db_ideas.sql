CREATE TABLE Role (
  RoleID INT PRIMARY KEY,
  RoleName VARCHAR(50)
);

CREATE TABLE Department (
  DepartmentID INT PRIMARY KEY,
  DepartmentName VARCHAR(50)
);

CREATE TABLE Staff (
  StaffID INT PRIMARY KEY,
  FullName VARCHAR(50),
  Email VARCHAR(50),
  Phone VARCHAR(20),
  Password VARCHAR(20),
  RoleID INT,
  DepartmentID INT,
  FOREIGN KEY (RoleID) REFERENCES Role(RoleID),
  FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID)
);
CREATE TABLE Category (
  CategoryID INT PRIMARY KEY,
  CategoryName VARCHAR(50),
  Description VARCHAR(200),
  ClosureDate DATE,
  Deadline DATE
);

CREATE TABLE Idea (
  IdeaID INT PRIMARY KEY,
  Title VARCHAR(100),
  Content VARCHAR(1000),
  is_anonymous BOOLEAN,
  CreateDate DATE,
  StaffID INT,
  CategoryID INT,
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
  FOREIGN KEY (CategoryID) REFERENCES Category(CategoryID)
);

CREATE TABLE Document (
  DocumentID INT PRIMARY KEY,
  DocumentPath VARCHAR(100),
  IdeaID INT,
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID)
);

CREATE TABLE Vote (
  VoteID INT PRIMARY KEY,
  Status VARCHAR(10),
  IdeaID INT,
  StaffID INT,
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID),
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);

CREATE TABLE Comment (
  CommentID INT PRIMARY KEY,
  CommentContent VARCHAR(500),
  StaffID INT,
  IdeaID INT,
  FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
  FOREIGN KEY (IdeaID) REFERENCES Idea(IdeaID)
);