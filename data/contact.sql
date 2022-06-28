ON DATABASE 'contact',
CREATE TABLE tblcontact,
 SELECT 'contact_id', int (11) NOT NULL,
 SELECT 'user_name', varchar (100) NOT NULL,
 SELECT 'user_email', varchar (255) NOT NULL,
 SELECT 'subject`, varchar(255), NOT NULL,
 SELECT 'content', text(255) NOT NULL,
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;