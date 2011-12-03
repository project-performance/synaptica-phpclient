<?php
include_once('classes/SynapticaManager.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $URLCONNECT = "";
        if (isset($_REQUEST["connectionurl"])) {
            $URLCONNECT = $_REQUEST["connectionurl"];
        }

        $USERID = "";
        if (isset($_REQUEST["userid"])) {
            $USERID = $_REQUEST["userid"];
        }

        $PWD = "";
        if (isset($_REQUEST["password"])) {
            $PWD = $_REQUEST["password"];
        }
        ?>
        <h1>Synaptica Webservice Client Test Page:</h1>
        <form action="test.php" method="POST">
            <input type='hidden' name='posted' value='true'></input> 
            <div>Connection</div><input type="text" name="connectionurl" value="<?php echo $URLCONNECT ?>" /><br><br>
            <div>User Id</div><input type="text" name="userid" value="<?php echo $USERID ?>" /><br><br>
            <div>Password</div><input type="password" name="password" value="<?php echo $PWD ?>" />
            <div><input type="submit" name="submit" value="Submit" /></div>
        </form>

        <?php
        if (isset($_REQUEST["posted"])) {
            $synapticaClient = new SynapticaManager($URLCONNECT);
            
            echo "<h1>Results:</h1>";
            
            //listing task views
            echo "<h2>Logging In...</h2>";
            $return = $synapticaClient->login($USERID, $PWD);
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            //listing task views
            echo "<h2>Listing Task Views:</h2>";
            $return = $synapticaClient->listTaskViews();
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            //listing vocabularies
            echo "<h2>Listing Vocabularies:</h2>";
            $return = $synapticaClient->listVocabularies(NULL);
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            //export vocabularies
            echo "<h2>Export Vocabularies:</h2>";
            $return = $synapticaClient->exportVocabulary();
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            //list related terms
            echo "<h2>Listing related Terms:</h2>";
            $return = $synapticaClient->listRelatedTermsById(1004, 'all', NULL);
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            echo "<h2>Sample Search:</h2>";
            //sample search
            $searchParams = array(
                '@tvp' => 1,
                '@headword_object_class_string' => 1000,
                '@vSearchopt' => 'Exact',
                '@vSubject' => 'botany'
            );

            //search terms
            $return = $synapticaClient->searchTerms($searchParams);
            print_r("Response Type: $return->ResponseType<br/>");
            print_r($return);

            //logout
            echo "<h2>Logging out...</h2>";
            $return = $synapticaClient->logout($USERID, $PWD);
            print_r("Response Type: $return->ResponseType<br/>");
        }
        ?>
    </body>
</html>