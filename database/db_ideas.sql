CREATE TABLE Role
(
    RoleID   INT PRIMARY KEY AUTO_INCREMENT,
    RoleName VARCHAR(50) NOT NULL
);

CREATE TABLE Department
(
    DepartmentID   INT PRIMARY KEY AUTO_INCREMENT,
    DepartmentName VARCHAR(50) NOT NULL
);

CREATE TABLE Staff
(
    StaffID      INT PRIMARY KEY AUTO_INCREMENT,
    FullName     VARCHAR(50) NOT NULL,
    Email        VARCHAR(50) NOT NULL,
    Password     TEXT        NOT NULL,
    RoleID       INT         NOT NULL,
    DepartmentID INT NULL,
    FOREIGN KEY (RoleID) REFERENCES Role (RoleID),
    FOREIGN KEY (DepartmentID) REFERENCES Department (DepartmentID)
);

CREATE TABLE Deadline
(
    DeadlineID       INT PRIMARY KEY AUTO_INCREMENT,
    ClosureDate      DATETIME NOT NULL,
    FinalClosureDate DATETIME NOT NULL
);

CREATE TABLE Topic
(
    TopicID     INT PRIMARY KEY AUTO_INCREMENT,
    TopicName   VARCHAR(50)  NOT NULL,
    Description LONGTEXT NOT NULL,
    CreateDate  DATETIME     NOT NULL,
    DeadlineID  INT NULL,
    FOREIGN KEY (DeadlineID) REFERENCES Deadline (DeadlineID)
);

CREATE TABLE Idea
(
    IdeaID       INT PRIMARY KEY AUTO_INCREMENT,
    Title        VARCHAR(100) NOT NULL,
    Content      LONGTEXT     NOT NULL,
    is_anonymous BOOLEAN      NOT NULL default FALSE,
    PostDate     DATETIME     NOT NULL,
    StaffID      INT          NOT NULL,
    TopicID      INT          NOT NULL,
    FOREIGN KEY (StaffID) REFERENCES Staff (StaffID),
    FOREIGN KEY (TopicID) REFERENCES Topic (TopicID)
);

CREATE TABLE Document
(
    DocumentID   INT PRIMARY KEY AUTO_INCREMENT,
    DocumentPath VARCHAR(100),
    IdeaID       INT,
    FOREIGN KEY (IdeaID) REFERENCES Idea (IdeaID)
);

CREATE TABLE Vote
(
    VoteID  INT PRIMARY KEY AUTO_INCREMENT,
    Status  BOOLEAN,
    IdeaID  INT NOT NULL,
    StaffID INT NOT NULL,
    FOREIGN KEY (IdeaID) REFERENCES Idea (IdeaID),
    FOREIGN KEY (StaffID) REFERENCES Staff (StaffID)
);

CREATE TABLE Comment
(
    CommentID      INT PRIMARY KEY AUTO_INCREMENT,
    CommentContent VARCHAR(1000) NOT NULL,
    StaffID        INT           NOT NULL,
    IdeaID         INT           NOT NULL,
    is_anonymous   BOOLEAN       NOT NULL default FALSE,
    CommentDate    DATETIME      NOT NULL,
    FOREIGN KEY (StaffID) REFERENCES Staff (StaffID),
    FOREIGN KEY (IdeaID) REFERENCES Idea (IdeaID)
);


INSERT INTO Department (DepartmentName)
VALUES ('Academy'),
       ('Office of Student Affairs'),
       ('Marketing'),
       ('Support'),
       ('IT'),
       ('Finance');

INSERT INTO Role (RoleName)
VALUES ('Quality Assurance Manager (QAM)'),
       ('Quality Assurance Coordinator(QAC)'),
       ('Staff');


INSERT INTO Staff (FullName, Email, Password, RoleID, DepartmentID)
VALUES ('Quality Assurance Manager', 'QAM.greenwich@gmail.com',
        '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 1, 1),
       ('Quality Assurance Coordinator', 'chiluan6601@gmail.com',
        '$2y$10$pjaXpyOBJ9Y964u7E4GWv.wy2IMbLdhd/Wj9vSmw4o/UxI8ya6V2C', 2, 1),
       ('Staff 1', 'staff1@example.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 2', 'staff2@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 3', 'staff3@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 4', 'staff4@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 5', 'staff5@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 6', 'staff6@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 7', 'staff7@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 8', 'staff8@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 9', 'staff9@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 10', 'staff10@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 11', 'staff11@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 12', 'staff12@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 13', 'staff13@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 14', 'staff14@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 15', 'staff15@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 16', 'staff16@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 17', 'staff17@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 18', 'staff18@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 19', 'staff19@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 20', 'staff20@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 21', 'staff21@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 22', 'staff22@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 23', 'staff23@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 24', 'staff24@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 25', 'staff25@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 26', 'staff26@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 27', 'staff27@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 28', 'staff28@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 29', 'staff29@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 30', 'staff30@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 31', 'staff31@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
       ('Staff 32', 'staff32@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1)
