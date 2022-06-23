CREATE TABLE `chat_users` (
`userid` int(11) NOT NULL,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`avatar` varchar(255) NOT NULL,
`current_session` int(11) NOT NULL,
`online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
(1, 'Rose', '123', 'user1.jpg', 3, 0),
(2, 'Smith', '123', 'user2.jpg', 1, 0),
(3, 'adam', '123', 'user3.jpg', 1, 0),
(4, 'Merry', '123', 'user4.jpg', 0, 0),
(5, 'katrina', '123', 'user5.jpg', 0, 0),
(6, 'Rhodes', '123', 'user6.jpg', 0, 0);

CREATE TABLE `chat` (
`chatid` int(11) NOT NULL,
`sender_userid` int(11) NOT NULL,
`reciever_userid` int(11) NOT NULL,
`message` text NOT NULL,
`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `chat_login_details` (
`id` int(11) NOT NULL,
`userid` int(11) NOT NULL,
`last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`is_typing` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
