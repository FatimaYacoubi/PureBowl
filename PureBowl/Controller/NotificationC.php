<?PHP

require_once $_SERVER['DOCUMENT_ROOT'].'/PureBowl/PureBowl/Model/Notification.php';
	class NotificationC {

        function countMessage(){

            $sql="SELECT * FROM webprojet.notification where ISNULL(status);";
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste->rowCount();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function displayNotificationById($id){

            $sql="SELECT * FROM notification where id=".$id;
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste->fetch();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function displayNotification(){

            $sql="SELECT * FROM notification where ISNULL(status);";
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function addMessage($message){

            $sql="INSERT INTO notification (id_command, message) 
			VALUES (:id_command, :message)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
                    'id_command' => $message->getIdCommand(),
                    'message' => $message->getMessage()

                ]);
                return 1;
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function updateNotificationById($id){

            $db = config::getConnexion();
            $sql = "UPDATE notification SET 
                               status=:status
                               WHERE id=:id";

            try{
                $query= $db->prepare($sql);

                $query->execute([
                    'id' => $id,
                    'status' => 1

                ]);

            } catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


    }

