# SETUP INSTRUCTIONS
<ul> 
  <li> On Xampp turn on Apache and MySQL (if on windows). On linux create virtual host </li>
  <li> Download database from root of this git repo </li>
  <li> Name database "test". Or change database credentials if needed in /config/.env - file, (DBNAME, Server, Username, Password) </li>
</ul>

# App manage instructions
<ul> 
  <li> Home page is list of 9 products (3x3) </li>
  <li> Below products there is a comment list section </li>
  <li> Below comment list section is form for submiting comments </li>
  <li> When a user submit comment it will display only if admin approves </li>
</ul>

# Admin section
## Access admin page by typing "/admin" inside of URL
There is a list of disabled comments which admin needs to approve in order for them to be displayed on home page
When admin approves a comment, comment is then displayed on home page
