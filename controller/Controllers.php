<?php

/**
 * General controllers
 * Get = select
 * Post = insert
 * Put = update
 * Delete = delete
 */

//  ATTENTION : vérifier que le nom de la classe corresponde bien avec le nom du fichier (majuscules, singulier/pluriel, etc.) !!!
class Controllers
{
    // ################### PARTIE SECURISATION #################################################### 
    /**
     * Sécurise les variables d'un tableau clé/valeur
     *
     * @param array => Tableau
     * @return array => Tableau avec les valeur après sécurisation : supprime les balises HTML et PHP d'une chaine de caractère,
     * remplace les espaces trops longs,
     * traduit les entités HTML dans une chaine de caractères,
     * enleve les espaces du début et de fin,
     */
    public static function secureArray($array)
    {
        $newArray = array();
        foreach ($array as $key => $value) {
            // Si la valeur n'est pas un tableau
            if (!is_array($value)) {
                $value = strip_tags($value); // Supprime les balises HTML et PHP d'une chaine de caractère
                $value = htmlspecialchars($value); // Traduit les entités HTML dans une chaine de caractères
                $value = Trim($value); // Enleve les espaces du début et de fin
                $newArray[$key] = $value; // Remplace dans le tableau l'ancienne valeur par la nouvelle
                // Sinon on remet les valeurs telles quelles
            } else {
                $newArray[$key] = $value;
            }
        }
        return $newArray;
    }

    public static function writingHello($maVar)
    {
        $returnText = "Bonjour " . $maVar . " !";
        return $returnText;
    }

    /**
     * Call curl on API in REST
     * @param int $param => params for call api
     * @return json => result API
     */
    static function getCurlRest($param)
    {
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST . $param);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        /* echo "<pre>";
            print_r($result);
            echo "</pre>"; */
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST
     * @param array $param => params for call api
     * @return json => result API
     */
    static function postCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        /* echo "<pre>";
              print_r($result); /* */
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST on PUT method
     * @param array $param => params for call api
     * @return json => result API
     */
    static function putCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        // For test
        /* echo "<pre> curlComponent => putCurlRest<hr>";
              print_r($result);
              echo "</pre>"; /* */
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST on DELETE method
     * @param array $param => params for call api
     * @return json => result API
     */
    static function deleteCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        // var_dump($result);
        curl_close($curl);
        return $result;
    }

    static function verifIfUserConnected()
    {
        if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
            return true;
        }
        return false;
    }

    static function verifUserIfExist($email, $password)
    {
        // On récupère les données des utilisateurs
        $param = "?ctrl=getUsers";
        $resultGetCurl = Controllers::getCurlRest($param);
        $resultGetCurl = json_decode($resultGetCurl);

        if ($resultGetCurl->status == "failed") {
            die("Une erreur est survenue, veuillez contacter le support technique!");
        } elseif ($resultGetCurl->status == "success") {
            // On parcourt la liste des données pour comparer
            foreach ($resultGetCurl->result as $value) {
                if ($value->email == $email && $value->mot_de_passe == $password) {
                    $_SESSION['idUser'] = $value->id;
                    $_SESSION['nameUser'] = $value->nom;
                    $_SESSION['lastNameUser'] = $value->prenom;
                    $_SESSION['emailUser'] = $value->email;
                    $_SESSION['typeUser'] = $value->type;
                    return true;
                }
            }
            return false;
        } else {
            die("Erreur critique");
        }
    }
}
