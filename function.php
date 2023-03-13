<?php
class brth_cr_data
{
    private $conn;

    public function __construct()
    {
        #database host, database user, database pass, database name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'royal_cyber';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }


    public function add_data($data)
    {

        // Get form data
        $us_name            = $data['us_name'];
        $ft_name            = $data['ft_name'];
        $mt_name            = $data['mt_name'];
        $union_or_ct        = $data['union_or_ct'];
        $ad_1               = $data['ad_1'];
        $ad_2               = $data['ad_2'];
        $ad_3               = $data['ad_3'];
        $rgstr_book_no      = $data['rgstr_book_no'];
        $rgstr_dt           = $data['rgstr_dt'];
        $card_rcv_dt        = $data['card_rcv_dt'];
        $brth_rgstr_no      = $data['brth_rgstr_no'];
        $brth_dt            = $data['brth_dt'];
        $ordr_of_chldrn     = $data['ordr_of_chldrn'];
        $brth_ad            = $data['brth_ad'];
        $gender             = $data['gender'];
        $prmnt_ad           = $data['prmnt_ad'];
        $ft_nid_no          = $data['ft_nid_no'];
        $ft_brth_rgstr_no   = $data['ft_brth_rgstr_no'];
        $ft_nationality     = $data['ft_nationality'];
        $mt_nid_no          = $data['mt_nid_no'];
        $mt_brth_rgstr_no   = $data['mt_brth_rgstr_no'];
        $mt_nationality     = $data['mt_nationality'];

        // Validate form data
        // TODO: Add validation rules for each field

        // Insert form data into the database

        // Prepare the SQL statement
        $stmt = $this->conn->prepare("INSERT INTO birth_certificate_info (us_name, ft_name, mt_name, union_or_ct, ad_1, ad_2, ad_3, rgstr_book_no, rgstr_dt, card_rcv_dt, brth_rgstr_no, brth_dt, ordr_of_chldrn, brth_ad, gender, prmnt_ad, ft_nid_no, ft_brth_rgstr_no, ft_nationality, mt_nid_no, mt_brth_rgstr_no, mt_nationality) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssssssssssss", $us_name, $ft_name, $mt_name, $union_or_ct, $ad_1, $ad_2, $ad_3, $rgstr_book_no, $rgstr_dt, $card_rcv_dt, $brth_rgstr_no, $brth_dt, $ordr_of_chldrn, $brth_ad, $gender, $prmnt_ad, $ft_nid_no, $ft_brth_rgstr_no, $ft_nationality, $mt_nid_no, $mt_brth_rgstr_no, $mt_nationality);


        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement and connection
        $stmt->close();
        $this->conn->close();


        // $sql = "INSERT INTO birth_certificate_info (us_name, ft_name, mt_name, union_or_ct, ad_1, ad_2, ad_3, rgstr_book_no, rgstr_dt, card_rcv_dt, brth_rgstr_no, brth_dt, ordr_of_chldrn, brth_ad, gender, prmnt_ad, ft_nid_no, ft_brth_rgstr_no, ft_nationality, mt_nid_no, mt_brth_rgstr_no, mt_nationality) VALUES ($us_name, $ft_name, $mt_name, $union_or_ct, $ad_1, $ad_2, $ad_3, $rgstr_book_no, $rgstr_dt, $card_rcv_dt, $brth_rgstr_no, $brth_dt, $ordr_of_chldrn, $brth_ad, $gender, $prmnt_ad, $ft_nid_no, $ft_brth_rgstr_no, $ft_nationality, $mt_nid_no, $mt_brth_rgstr_no, $mt_nationality)";

        // if(mysqli_query($this->conn, $sql)){

        //     return "Information Added Successfully";
        // }

        // $stmt = mysqli_prepare($this->conn, $sql);

        // // Check if the statement was prepared successfully
        // if (!$stmt) {
        //     die("Error: " . mysqli_error($this->conn));
        // }

        // mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $us_name, $ft_name, $mt_name, $union_or_ct, $ad_1, $ad_2, $ad_3, $rgstr_book_no, $rgstr_dt, $card_rcv_dt, $brth_rgstr_no, $brth_dt, $ordr_of_chldrn, $brth_ad, $gender, $prmnt_ad, $ft_nid_no, $ft_brth_rgstr_no, $ft_nationality, $mt_nid_no, $mt_brth_rgstr_no, $mt_nationality);

        // if (mysqli_stmt_execute($stmt)) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . mysqli_stmt_error($stmt);
        // }

        // mysqli_stmt_close($stmt);
        // mysqli_close($this->conn);

    }



    // public function display_data(){
    //     $query = "SELECT * FROM students";
    //     if(mysqli_query($this->conn, $query)){
    //         $returndata = mysqli_query($this->conn, $query);
    //         return $returndata;
    //     }
    // }
    // public function display_data_by_id($id){
    //     $query = "SELECT * FROM students WHERE id=$id";
    //     if(mysqli_query($this->conn, $query)){
    //         $returndata = mysqli_query($this->conn, $query);
    //         $studentData = mysqli_fetch_assoc($returndata);
    //         return $studentData;
    //     }
    // }

    // public function update_data($data){
    //     $std_name = $data['u_std_name'];
    //     $sub_name = $data['u_sub_name'];
    //     $idno = $data['std_id'];
    //     $std_img = $_FILES['u_std_img']['name'];
    //     $tmp_name = $_FILES['u_std_img']['tmp_name'];

    //     $query = "UPDATE students SET std_name='$std_name', sub_name='$sub_name', stg_img='$std_img' WHERE id=$idno";

    //     if(mysqli_query($this->conn, $query)){
    //         move_uploaded_file($tmp_name, 'upload/'.$std_img);
    //         return "Information Updated Successfully!";
    //     }
    // }

    // public function delete_data($id){
    //     $catch_img = "SELECT * FROM students WHERE id=$id";
    //     $delete_std_info = mysqli_query($this->conn, $catch_img);
    //     $std_infoDle = mysqli_fetch_assoc($delete_std_info);
    //     $deleteImg_data = $std_infoDle['stg_img'];
    //     $query = "DELETE FROM students WHERE id=$id";
    //     if(mysqli_query($this->conn, $query)){
    //         unlink('upload/'.$deleteImg_data);
    //         return "Deleted Successfully";
    //     }
    // }
}
