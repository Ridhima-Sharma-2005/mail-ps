for frontend i initially used html and css whose codes are attached.
i created all the three - inbox , compose, email
Inside the body tag there is three level of hierarchy. On top there is a division with class specified as inbox which basically consist all the emails. Inside division there’s another division called email-list which contain all the different list present. And inside email list we have another division which is named as email-item , where each div with class email-item specifies a particular email with sender address, subject, timestamp specified inside it.
A submit button is added to the form using <input type="submit">, allowing users to send the composed email.
The button text is set to "Send".
The main form for composing emails is created using the <form> element with the ID emailForm.
Input fields for the recipient's email address, subject, and message body are included using <input> and <textarea> elements.
Each input field is labeled using <label> elements for accessibility and user clarity.
A <div> element with the ID status is included below the form to display status messages, such as success or error messages, related to email submission.
CSS rules are applied inline using the style attribute within HTML elements to style specific elements directly.
This approach is used for simplicity and to keep the example self-contained within a single file




for storing the emails i used mysql database which stores the data in tabular form
the database scheme followed for stroing the data is as follows
EXPLANATION OF SCHEMA:-
Users Table: This table keeps stuff about people. Each person has a special number (id) and a username (username) and password for signing in . whnerever a new user creates an account with his password and mail id. his username and password will be saved in  and the user will be assigned a user id for connecting to other tables. 
Emails Table: In this we store messages we send to each other. Every message has its own special number (id), and we see who sent it by using their special number (sender_id). We also keep track of the subject, the message itself, when it was sent (timestamp), and other things if needed.the email table and the users table are connected througha foreign key which is unique for each user
Recipients Table: This table tells us who got each message. Since a message can go to many people and a person can get many messages, this table makes a link between messages and people. Every row here show one person (recipient_id) who got one message (email_id).
Attachments Table:  In this table we keep extra stuff that comes with messages, like files or pictures. Each piece of extra stuff has its own special number (id), and we connect it to the message it belongs to using the message's special number (email_id). We also save the name of the extra stuff and where it's kept.
 In this way of storing things helps keep track of who sent what to whom, what the messages are about, when they were sent, and any extra stuff that comes along with them. You can add more things or change stuff around to fit what you need.


for backend connectivity i used php language to connect to the mysql server and used apache web server to host the site. firstly i established a connection between mysql and php to retrieve the data sets from mysql
then the initially made html and css files (frontend) have to be connected to php for proepr functioning.
i tried to implement the php code in html by changing the extension of html file to php and then embedding the code of connectivity. then the further php code is written to retrieve the data from mysql database. like for inbox we will retrive the data of email tables. and the info related to  composed emails when sent will go to the recepient table


what all have been done--
i created the frontend for all the threee things asked
but didnt connect them together due to time constraints . we can connect it using <a href> 


for backend 
i created database model to store the data and implemented end points to retrieve the inbox . but implementing this with frontend resulted in deformation of the structure initially created . this can be easily sorted out.
attaching all my work along with their screenshots. as all thw work is in scattered form
