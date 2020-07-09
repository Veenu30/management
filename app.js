const express=require("express");
var app=express();
const hbs=require("hbs");
const bodyParser=require("body-parser");
const path=require("path");
const urlEncoded=bodyParser.urlencoded({extended:true});
const pathToForm=path.join(__dirname,"public");
const pathToViews=path.join(__dirname);
/*const pathToViews=path.join(__dirname,"views");*/
const pathToPartials=path.join(__dirname,"templates");
const port=process.env.PORT || 3200;
app.set('view engine','hbs');
app.set('views',pathToViews);
app.use(bodyParser.urlencoded());
app.use(express.static(pathToForm));
hbs.registerPartials(pathToPartials);
app.get("/admin",function(req,res){
    res.render("admin");
});
app.get("/index",function(req,res){
    res.render('index');
})
app.get("/newstudentchat",function(req,res){
    res.render('newstudentchat')
})
app.get("/newstudentsearch",function(req,res){
    res.render('newstudentsearch')
})
app.get("/newstudenyregistration",function(req,res){
    res.render('newstudenyregistration')
})
app.get("/oldstudentchat",function(req,res){
    res.render('oldstudentchat');
})
app.get("/oldstudentsearch",function(req,res){
    res.render('oldstudentsearch');
})
app.get("/studentlogin",function(req,res){
    res.render("studentlogin");
})
app.get("/oldstudentregistration",function(req,res){
    res.render('oldstudentregistration');
});
app.post("/oldstudentregistration",urlEncoded,function(req,res){
    res.render('oldstudentrsuccess',{data:req.body});
})
app.post("/newstudenyregistration",urlEncoded,function(req,res){
    res.render("views/newstudentrsuccess",{data:req.body});
})
app.listen(port,()=>{
     console.log("server is running");
 }
 )