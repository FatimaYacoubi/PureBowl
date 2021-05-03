<?PHP

	require_once '../Model/Notification.php';
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

            $sql="INSERT INTO notification (objet, message) 
			VALUES (:objet, :message)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'objet' => $message->getObjet(),
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

