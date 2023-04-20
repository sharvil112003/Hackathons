const mongoose = require("mongoose");

const dbUrl =
  "mongodb+srv://tejasvi:1234@hackathon.9979kgt.mongodb.net/?retryWrites=true&w=majority";

const connectionParams = {
  useNewUrlParser: true,
  useUnifiedTopology: true,
};

mongoose
  .connect(dbUrl, connectionParams)
  .then(() => {
    console.log("Connected to database");
  })
  .catch((e) => {
    console.log("Error:", e);
  });

const Schema = mongoose.Schema;

const userSchema = new Schema({
  college_name: { type: String, required: true },
  email_id: { type: String, required: true },
  club_name:{type:String,required:true },
  password1:{type:String,required:true},
  password2:{type:String,required:true},

});

const loginSchema = new Schema({
  email_id: { type: String, required: true },
  password: { type: String, required: true },
});

const User = mongoose.model("User", userSchema);
const Login = mongoose.model("Login", loginSchema);

module.exports = { User, Login };