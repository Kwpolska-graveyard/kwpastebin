The KwPastebin is changing.  With each modification some compatibility is lost.

Major updates list
==================

This is a ``changelog" for the project.  Only the important modifications that
modify the database/behavior/etc are listed.  The dates are in mm/dd/yy format.

    +----------+----------+------------------------+--------------------------+
    | date     | type     | reason                 | changes                  |
    +----------+----------+------------------------+--------------------------+
    | 03/13/11 | database | New unique IDs         | +pasteid, mod. timestamp |
    +----------+----------+------------------------+--------------------------+

Explainations
=============

This is an explaination of all the updates made to the project (newest comes
first).  All the dates are in mm/dd/yy format.

03/13/11
--------

       Date: March 13th, 2011  
       Type: Database modification
     Reason: New unique IDs.
    Changes: Added the field pasteid, modified the timestamp field.

This modification replaced relying on the current timestamp and a random number
as the entry ID. The function used now is uniqid().  The ID is *always* unique.
See the new database table:

    +-----------+--------------+------+-----+---------+-------+
    | Field     | Type         | Null | Key | Default | Extra |
    +-----------+--------------+------+-----+---------+-------+
    | code      | text         | NO   |     | NULL    |       |
    | language  | varchar(50)  | NO   |     | NULL    |       |
    | pasteid   | varchar(100) | NO   |     | NULL    |       |
    | timestamp | varchar(50)  | NO   |     | NULL    |       |
    | dsc       | varchar(250) | YES  |     | NULL    |       |
    +-----------+--------------+------+-----+---------+-------+

A new field, pasteid, varchar(100), NOT NULL was added. See this:

    +-------------+----------+--------------+-------------+
    | code        | language | timestamp    | dsc         |
    +-------------+----------+--------------+-------------+
    | Go to: hell | text     | 1299956895.3 | Go to: hell |
    +-------------+----------+--------------+-------------+

    +-------------+----------+---------------+------------+-------------+
    | code        | language | pasteid       | timestamp  | dsc         |
    +-------------+----------+---------------+------------+-------------+
    | Go to: hell | text     | 4d7c94caeb336 | 1299956895 | Go to: hell |
    +-------------+----------+---------------+------------+-------------+

The timestamp field no longer has the random number.  The pasteid field is
being generated using uniqueid().  You have to change them.  Using the old
timestamp.number form is fine with the script if you'll use it in the
``pasteid" field.  The ``timestamp" field *must* be changed if you want to use
the new version.

This document is Copyright (C) Kwpolska 2011 and a part of KwPastebin.  The
newest version is always available at <https://github.com/Kwpolska/kwpastebin>.
