const express = require("express")
const app = express()
const path = require('path');
const { User, Login } = require("./mongodb");
const bcrypt = require('bcrypt');

const template_path = path.join(__dirname, '../templates');

app.set('view engine', 'hbs');
app.set('views', template_path);

require('./mongodb');

app.use(express.static(template_path));
app.use(express.urlencoded({ extended: true }));




app.get('/', (req, res) => {
  res.render('login');
})

app.get("/signup", (req, res) => {
  res.render("signup")
})

app.post("/signup", async (req, res) => {
  const data = {
    college_name: req.body.college_name,
    password1: req.body.password1,
    email_id: req.body.email_id,
    club_name:req.body.club_name,
    password2:req.body.password2
  };
  const user = new User(data);
  await user.save();
  res.redirect("/login");
});

app.post("/login", async (req, res) => {
  const email = req.body.email;
  const user = await User.findOne({ email: email });

  if (!user) {
    return res.status(400).send('Invalid email');
  }

  res.render("home");
});


app.listen(3005, () => {
  console.log("Connecting to the port");
});