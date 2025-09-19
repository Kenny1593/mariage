create database mariage;
create role mariage with login password 'mariage';
Alter database mariage owner to mariage;


create table place(
    id SERIAL NOT NULL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);



create table invitation (
    id SERIAL NOT NULL PRIMARY KEY,
    numero integer NOT NULL
);

create table inviteTable(
    id SERIAL NOT NULL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    idPlace INTEGER NOT NULL,
    idInvitation INTEGER NOT NULL
);
ALTER TABLE inviteTable ADD CONSTRAINT fk_invite_place FOREIGN KEY (idPlace) REFERENCES place(id);
ALTER TABLE inviteTable ADD CONSTRAINT fk_invite_invitation FOREIGN KEY (idInvitation) REFERENCES invitation(id);




insert into place (nom) VALUES('Table 50');
insert into place (nom) VALUES('Table 51');

insert into invite (nom,nombre,idplace) VALUES('Kenny',1,1);

23 tables
113 invitations
