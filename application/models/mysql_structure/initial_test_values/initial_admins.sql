/*Basic and personal users for the administration panel*/
insert into admin
(name         , type         , password                                                          , salt              , is_active) values
('7Admin'     , 'super_admin', 'e31a5cb9ffbc3ca0cf424cdf7cee222997310f8495a29d8f776231d807fcf9b8', '0b5745acf1e6c9'  , 1), /*Password: 7@posoka*/
('IvanDimanov', 'super_admin', '8d4d310f106f144504bb3106534d2ab49623f2a44d50f35ebc479eb8bf54177f', '792b4b267c2da11e', 1); /*Password: dimanov$498*/