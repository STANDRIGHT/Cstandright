<?php
    class App extends Database{
        public function getSlide(){
            $slidquery= $this->prepare("SELECT Hid AS _id, Htitle AS _title, Hsubtitle _subtitle, Hyoutube _youtube, created_at	_created, Himages as _img FROM ".TBL_HOME."");
            $slidquery->execute();

            // fetch data
            $sliders= $slidquery->fetchAll(PDO:: FETCH_OBJ); // i can equally fetch the data using another varrible 
            return $sliders;
        }

        public function getservice(){
            // 2 MAKE QU ERY FOR SERVICES
            $services= $this->prepare("SELECT _id  AS _Sid , Simages AS images, Spng As png, Stitle As title, Ssubtitle AS subtitle, Sdescription AS _description  FROM  ".TBL_SERVICES." ");
            $services->execute();        
            
            // fetch data
            return $services->fetchAll(PDO:: FETCH_OBJ);

        }

        public function team(){
            // 3 MAKE QUERY FOR TEAM
            $our_team =$this->prepare("SELECT OTid _id, OTimages _images, OTposition _position, OTname _name FROM ".TBL_OUR_TEAM." ");
            $our_team->execute();

            //fetch date as OBJ
            $fetch_teams= $our_team->fetchAll(PDO:: FETCH_OBJ);
            return $fetch_teams;
        }


        public function recent_work(){
            //4 make query fo our recent work
            $recent=$this->prepare("SELECT Rid _Rid, Rimages _Rimages, Rtitle _Rtitle, Rsub_title _Rsub_title, Rcontent _Rcontent, Rcreator _Rcreator, created_at _created_at FROM ".TBL_RECENT_WORKS." ");
            $recent->execute();

            //4 fetch data of recent_wrks
            $fetch_recent= $recent->fetchAll(PDO:: FETCH_OBJ);
            return $fetch_recent;
        }


        public function blogs(){
            //5 make query for the blog
            $blogs=$this->prepare("SELECT  Bid _id, Bimages _images, Bcomment _comment, Btitle _title, Bdescription _description, added_by _added_by, created_by _created_by FROM ".TBL_BLOGS."");
            $blogs->execute();

            //fetch data of blogs
            $all_blogs= $blogs->fetchAll(PDO:: FETCH_OBJ);
            return $all_blogs;
        }







    }


      

    
