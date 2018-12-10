<style>
a{
  color:#D8D8D8;
  font-size: 18px;
  line-height: 1.2; 
  position: relative; 
  padding: 19px;
  cursor: pointer;
}
.positive:after {
  content: "";
  height: 100%;
  min-width: 4px;
  background: #BEF781;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: .5s;
}
.positive:hover:after {
  min-width: 100%;
  background: #2EFE2E;
  opacity: .25;
}
.netral:after {
  content: "";
  height: 100%;
  min-width: 4px;
  background: #ECCEF5;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: .5s;
}
.netral:hover:after {
  min-width: 100%;
  background: #ECCEF5;
  opacity: .25;
}
.negative:after {
  content: "";
  height: 100%;
  min-width: 4px;
  background: #F5A9A9;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: .5s;
}
.negative:hover:after {
  min-width: 100%;
  background: #FA5858;
  opacity: .25;
}
body{
  max-width: 1280px;
  width:1200px;
  position: absolute;
  background:url("bground.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 900px;
}
table{
  max-width: 1280px;
  width:1200px;
  position: absolute;
  margin-top:100px;
  margin-left:10px;
}
td{
  padding:18px;
  margin-left:35px;
  text-align:left;
}


</style>