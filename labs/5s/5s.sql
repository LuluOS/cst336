/* DATA DEFINITION (DDL) */

/* 1.   Add DepartmentID to EmployeePay table */
ALTER TABLE  `EmployeePay` ADD  `DepartmentID` INT NOT NULL AFTER  `EmployeeID` ;

/* 2.   Add DepartmentID ForeignKey constraint, referencing Department table */
ALTER TABLE  `EmployeePay` DROP PRIMARY KEY ,
  ADD PRIMARY KEY (  `EmployeeID` ,  `DepartmentID` ,  `EffectiveDate` ) ;

INSERT INTO `review`.`Department` (`DepartmentID`, `Name`) VALUES ('0', 'Admin');

ALTER TABLE  `EmployeePay`
  ADD FOREIGN KEY (  `DepartmentID` )
   REFERENCES  `review`.`Department` (`DepartmentID`)
    ON DELETE NO ACTION ON UPDATE RESTRICT ;

/* 3.   Add CurrentManagerID to Employee table */
ALTER TABLE  `Employee` ADD  `CurrentManagerID` INT NOT NULL AFTER  `EmployeeID` ;

/* 4.   Add CurrentManagerID ForeignKey constraint, referencing Employee table */
ALTER TABLE `Employee`
  DROP PRIMARY KEY,
   ADD PRIMARY KEY(
     `EmployeeID`,
     `CurrentManagerID`);

INSERT INTO  `review`.`Employee` (
  `EmployeeID` ,
  `CurrentManagerID` ,
  `FName` ,
  `LName` ,
  `birthDate` ,
  `createDate`) 
   VALUES ('0',  '0',  'Anyone',  'Anyone', NULL , CURRENT_TIMESTAMP);


ALTER TABLE  `Employee` ADD CONSTRAINT  `Employee_ibfk_1`
  FOREIGN KEY (  `CurrentManagerID` )
   REFERENCES  `review`.`Employee` (`EmployeeID`)
    ON DELETE NO ACTION ON UPDATE NO ACTION ;


/*##############################################################################*/
/* DATA MANIPULATION (DML), PART 1 */

/* 5.   Create SELECT statement that INNER JOINs the Employee table to the 
        EmployeePay table */
SELECT * FROM `Employee` e INNER JOIN `EmployeePay` ep ON e.EmployeeID = ep.EmployeeID;
/*EmployeeID    CurrentManagerID    FName   LName   birthDate   createDate  EmployeeID  DepartmentID    EffectiveDate   hourlyAmount
    2                   0           Tina  Handerson NULL    2016-03-07 18:56:17 2   0   2017-01-01  15.35*/ 


/* 6.   Add to SELECT statement, inner joining Department table so you 
        can add the department name to the SELECT */

        

/*##############################################################################*/        
/* DATA MANIPULATION (DML), PART 2 */

/* 7.   Add to SELECT statement, inner joining Employee table so you 
        can add the manager name to the SELECT */

/*##############################################################################*/
/* DATA MANIPULATION (DML), PART 3 */

/* 8.   Create SELECT Statement that outer joins Employee to Employee Pay,
        making sure you are only showing the most recent EmployeePay record 
        for each Employee row. You must add more than one row to the EmployeePay
        table to test this. Hint: you must use a sub-select. */
SELECT  *
FROM    EmployeePay ep
WHERE   EffectiveDate = 
        (SELECT MAX(EffectiveDate)
        From EmployeePay eps