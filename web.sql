-- Create a new table called 'TableName' in schema 'SchemaName'
-- Drop the table if it already exists
--IF OBJECT_ID('dbo.', 'Username') IS NOT NULL
--DROP TABLE dbo.Username
--GO
-- Create the table in the specified schema
--CREATE TABLE dbo.Username
--(
 --   UsernameId INT NOT NULL PRIMARY KEY, -- primary key column
 --   Name [NVARCHAR](50) NOT NULL,
 --   Location [NVARCHAR](50) NOT NULL
    -- specify more columns here
--);
--GO

-- Insert rows into table 'TableName'
INSERT INTO Username
( -- columns EmployeeIDrt dNameinto
 [UsernameID], [Name], [Location])
VALUES
( -- first row: values for the columns in the list above
 1, N'Juan', N'Place1'
),
( -- second row: values for the columns in the list above
 2, N'Cher', N'Place2'
)
-- add more rows here
GO
SELECT COUNT(*) as UsernameCount FROM dbo.Username;
SELECT e.UsernameID, e.Name, e.Location
FROM dbo.Username as e
GO
