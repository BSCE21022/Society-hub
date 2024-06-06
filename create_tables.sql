DROP TABLE Resident;
CREATE TABLE Resident (
    HouseNum VARCHAR(50) PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Gender CHAR(1) NOT NULL,
    DOB DATE NOT NULL,
    family_mem INT NOT NULL,
    Phone NUMERIC (12,0) NOT NULL,
    Pass VARCHAR(255) NOT NULL
);

DROP TABLE Management;
CREATE TABLE Management (
    Username VARCHAR(50) PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Gender CHAR(1) NOT NULL,
    DOB DATE NOT NULL,
    Phone NUMERIC (11,0) NOT NULL,
    Pass VARCHAR(255) NOT NULL,
    Designation VARCHAR(50) NOT NULL
);

DROP TABLE Complains;
CREATE TABLE Complains (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Category VARCHAR(50) NOT NULL,
    Area VARCHAR(50) NOT NULL,
    myTextArea TEXT NOT NULL,
    Urgency VARCHAR(20) NOT NULL,
    CD DATE NOT NULL,
    status CHAR(1) NOT NULL default('F'),
    house_no VARCHAR(50) NOT NULL,
    FOREIGN KEY (house_no) REFERENCES Resident(HouseNum)
);

DROP TABLE WaterDelivery;
CREATE TABLE WaterDelivery (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    CD DATE NOT NULL,
    BottlesNo INT NOT NULL,
    Requests TEXT,
    cost INT NOT NULL,
    status CHAR(1) NOT NULL default('F'),
    house_no VARCHAR(50) NOT NULL,
    FOREIGN KEY (house_no) REFERENCES Resident(HouseNum)
);

DROP TABLE EventBooking;
CREATE TABLE EventBooking (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name_event VARCHAR(100) NOT NULL,
    Type VARCHAR(50) NOT NULL,
    StartTime TIME NOT NULL,
    EndTime TIME NOT NULL,
    Date_event DATE NOT NULL,
    Facilities VARCHAR(1000),
    event_space VARCHAR(50),
    Attendees INT,
    FoodCatering VARCHAR(255),
    Requests TEXT,
    cost_event INT NOT NULL,
    status CHAR(1) NOT NULL default('F'),
    house_no VARCHAR(50) NOT NULL,
    FOREIGN KEY (house_no) REFERENCES Resident(HouseNum)
);

DROP TABLE Announcements;
CREATE TABLE Announcements (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    announce_text TEXT NOT NULL,
    Username VARCHAR(50) NOT NULL,
    FOREIGN KEY (Username) REFERENCES Management(Username)
);

