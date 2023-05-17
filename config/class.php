<?php
class App extends Database
{
    public function getSlide()
    {
        $slidquery = $this->prepare("SELECT Hid AS _id, Htitle AS _title, Hsubtitle _subtitle, Hyoutube _youtube, created_at	_created, Himages as _img FROM " . TBL_HOME . "");
        $slidquery->execute();

        // fetch data
        $sliders = $slidquery->fetchAll(PDO::FETCH_OBJ); // i can equally fetch the data using another varrible 
        return $sliders;
    }

    public function getservice()
    {
        // 2 MAKE QUERY FOR SERVICES
        $services = $this->prepare("SELECT _id  AS _Sid , Simages AS images, Spng As png, Stitle As title, Ssubtitle AS subtitle, Sdescription AS _description  FROM  " . TBL_SERVICES . " ");
        $services->execute();

        // fetch data
        return $services->fetchAll(PDO::FETCH_OBJ);
    }

    public function team()
    {
        // 3 MAKE QUERY FOR TEAM
        $our_team = $this->prepare("SELECT OTid _id, OTimages _images, OTposition _position, OTname _name FROM " . TBL_OUR_TEAM . " ");
        $our_team->execute();

        //fetch date as OBJ
        $fetch_teams = $our_team->fetchAll(PDO::FETCH_OBJ);
        return $fetch_teams;
    }


    public function recent_work()
    {
        //4 make query fo our recent work
        $recent = $this->prepare("SELECT Rid _Rid, Rimages _Rimages, Rtitle _Rtitle, Rsub_title _Rsub_title, Rcontent _Rcontent, Rcreator _Rcreator, created_at _created_at FROM " . TBL_RECENT_WORKS . " ");
        $recent->execute();

        //4 fetch data of recent_wrks
        $fetch_recent = $recent->fetchAll(PDO::FETCH_OBJ);
        return $fetch_recent;
    }


    public function blogs()
    {
        //5 make query for the blog
        $blogs = $this->prepare("SELECT  Bid _id, Bimages _images, Bcomment _comment, Btitle _title, Bdescription _description, added_by _added_by, created_at _created_at FROM " . TBL_BLOGS . "");
        $blogs->execute();

        //fetch data of blogs
        $all_blogs = $blogs->fetchAll(PDO::FETCH_OBJ);
        return $all_blogs;
    }

    public function testimonials()
    {
        //6 make functions for testimonials
        $testimonaials = $this->prepare("SELECT Tid AS _id, Timages AS _images, Tcontent AS _content, Tname AS _name, created_at AS _created_at FROM " . TBL_TESTIMONIALS . " ");
        $testimonaials->execute();

        //fetch testimonials
        while ($rows = $testimonaials->fetch(PDO::FETCH_OBJ)) {
            $fetch_testimonials[] = $rows;
        }

        return $fetch_testimonials;
    }



    public function service_details($id)
    {
        // 7 MAKE QUERY FOR SERVICE_DETAILS
        $service_details = $this->prepare("SELECT _id  AS _Sid , Simages AS images, Subimages AS _Subimages, Spng As png, 
                Scaption AS _Scaption, Stitle As title, Ssubtitle AS subtitle, Sdescription AS _description, SLdetails _SLdetails, 
                SMdetails _SMdetails, Sjourney _Sjourney, Sjourney2 _Sjourney2, added_by _added_by, created_by _created_by
                FROM  " . TBL_SERVICES . " WHERE _id=:id");
        $service_details->bindParam(":id", $id);
        $service_details->execute();

        // fetch and return data
        return $service_details->fetch(PDO::FETCH_OBJ);
    }

    /*public function service_details_list($Sid){
            // 2 MAKE QU ERY FOR SERVICES
            $service_details= $this->prepare("SELECT _id  AS _Sid , Simages AS images, Subimages AS _Subimages, Spng As png, 
                Scaption AS _Scaption, Stitle As title, Ssubtitle AS subtitle, Sdescription AS _description, SLdetails _SLdetails, 
                SMdetails _SMdetails, Sjourney _Sjourney, Sjourney2 _Sjourney2, added_by _added_by, created_by _created_by
                FROM  ".TBL_SERVICES." WHERE _id=:Sid");
            $service_details->bindParam(":Sid", $Sid);
            $service_details->execute();        
            
            // fetch and return data
            return $service_details->fetchAll(PDO:: FETCH_OBJ);
        }*/

    public function Sdetails_list()
    {
        //8 FUNCTION for DETAILS_LIST
        $Sdetails_list = $this->prepare("SELECT _id  AS SLid, _name SLname, created_by SLcreated_by, created_at SLcreated_at 
            FROM " . TBL_SERVICE_LIST . " ");
        $Sdetails_list->execute();

        //fetch data and return
        return $Sdetails_list->fetchAll(PDO::FETCH_OBJ);
    }

    public function Service_list_details($SLid)
    {
        //9 FUNCTION for SERVICE_LIST_DETAILS
        $Sdetails = $this->prepare("SELECT _id  AS _Sid , Simages AS images, Subimages AS _Subimages, Spng As png, 
            Scaption AS _Scaption, Stitle As title, Ssubtitle AS subtitle, Sdescription AS _description, SLdetails _SLdetails, 
            SMdetails _SMdetails, Sjourney _Sjourney, Sjourney2 _Sjourney2, added_by _added_by, created_by _created_by
            FROM  " . TBL_SERVICES . " WHERE _id=:SLid");
        $Sdetails->bindParam(":SLid", $SLid);
        $Sdetails->execute();

        //fetch and return date
        return  $Sdetails->fetch(PDO::FETCH_OBJ);
    }


    // MAKING QUERY FOR SERVICE DETAILS AND TAGS
    public function tags($id)
    {
        //10 MAKE FUNCTION FOR TAG LIST IN THE SERVICE DETAILS AND SERVICES_LIST _DETAILS
        $tags = $this->prepare("SELECT _id  AS Tid, service_id AS Tservice_id, _name T_name, created_at Tcreated_at
                FROM  " . TBL_TAGS . " WHERE service_id=:id");
        $tags->bindParam(":id", $id);
        $tags->execute();

        //fetch and return data
        return $tags->fetch(PDO::FETCH_OBJ);
    }

    //11MAKING QUERY FOR SERVICE-DETAILS-LISTS
    public function tags_two($SLid)
    {
        //11 MAKE FUNCTION  FOR TAGS TO THAT FETCH DATA OF SERVICE-DETAILS-LISTS
        $tags2 = $this->prepare("SELECT _id  AS Tid, service_id AS Tservice_id, _name T_name, created_at Tcreated_at
                FROM  " . TBL_TAGS . " WHERE service_id=:SLid");
        $tags2->bindParam(":SLid", $SLid);
        $tags2->execute();

        //fetch and return data
        return $tags2->fetch(PDO::FETCH_OBJ);
    }

    //12MAKE QUERY FOR BLOGS
    public function blog_dteails($blog)
    {
        $blogs = $this->prepare("SELECT Bid _Bid, Bcategory _Bcategory, Bimages _Bimages, BSub_images _BSub_images, Bcomment _Bcomment,
            Btitle _Btitle, Bdescription _Bdescription, Btext _Btext, Btext_sub _Btext_sub, Bjourney _Bjourney,
            Bjourney2 _Bjourney2, added_by _added_by, created_at _created_at FROM blogs WHERE Bid=:blog");
        $blogs->bindParam(":blog", $blog);
        $blogs->execute();

        //fetch and return data
        return $blogs->fetch(PDO::FETCH_OBJ);
    }


    public function comments($blog){
        //13 MAKE QUERY FOR COMMENTS
        $comments = $this->prepare("SELECT com_id _com_id , blog_id _blog_id, blog_category _blog_category, com_uname _com_uname,
        com_image _com_image, com_message _com_message, com_uemail _com_uemail, com_rating _com_rating, created_at _created_at
        FROM comments WHERE blog_id =:blog");
        $comments->bindParam(":blog", $blog);
        $comments->execute();

        //fetch and return  data
        return $comments->fetchAll(PDO:: FETCH_OBJ);
    }
}
