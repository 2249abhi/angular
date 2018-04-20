<?php

/**
 * @author ankitt
 */
define('API_KEY', 'be714bcb1a40d1f6d1b6288e8bdde2a6-us2');
define('LIST_ID', 'b1eae41c56');
define('WB_LIST_ID', '6ccbb3df4b');

class MailChimp
{

    public function addSubscriber($userData, $wb = false, $LangSlug = "en-us")
    {
        // Validation
        $email = $userData['email'];
        $userName = $userData['name'];
        $vars = array(
            'FNAME' => $userName
        );
        if (!$email) {
            return array('status' => 'failed', 'msg' => 'No email address provided');
        }
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $email)) {
            return array('status' => 'failed', 'msg' => 'Email address is invalid');
        }
        $api = new MCAPI(API_KEY);
        $list_id = LIST_ID;
        if ($wb) {
            $list_id = WB_LIST_ID;
            //filter based on locale slug =======
            if ($LangSlug == 'en-us') {
                $list_id = '37fcda3ad7';
            } else if ($LangSlug == 'en-ca' || $LangSlug == 'fr-ca') {
                $list_id = '2e859dbb4b';
            } else if ($LangSlug == 'es-mx') {
                $list_id = '5b741a9dea';
            } else if ($LangSlug == 'da-dk') {
                $list_id = 'a390364360';
            } else if ($LangSlug == 'de-de') {
                $list_id = '202d3f174c';
            } else if ($LangSlug == 'es-es') {
                $list_id = '32b7e2dd13';
            } else if ($LangSlug == 'fr-fr') {
                $list_id = 'fe932c6339';
            } else if ($LangSlug == 'it-it') {
                $list_id = '3ea6a58baf';
            } else if ($LangSlug == 'nl-nl') {
                $list_id = '63cf36fa5a';
            } else if ($LangSlug == 'nb-no') {
                $list_id = 'e34f0d383b';
            } else if ($LangSlug == 'de-ch' || $LangSlug == 'en-ch' || $LangSlug == 'fr-ch') {
                $list_id = '312a397a8d';
            } else if ($LangSlug == 'fi-fi') {
                $list_id = 'cc548da540';
            } else if ($LangSlug == 'sv-se') {
                $list_id = '276ce6f2cc';
            } else if ($LangSlug == 'en-gb') {
                $list_id = '08a84b4ec6';
            } else if ($LangSlug == 'en-au') {
                $list_id = '13e06a661e';
            } else if ($LangSlug == 'zh-cn') {
                $list_id = 'e1917ba959';
            } else if ($LangSlug == 'en-hk' || $LangSlug == 'zh-hk') {
                $list_id = '527ac82237';
            } else if ($LangSlug == 'ja-jp') {
                $list_id = '069ea5938e';
            } else if ($LangSlug == 'en-nz') {
                $list_id = '1adfcfe487';
            } else if ($LangSlug == 'en-sg') {
                $list_id = 'ce4c4cf57f';
            } else if ($LangSlug == 'ko-kr') {
                $list_id = 'bdb07ac89c';
            } else if ($LangSlug == 'zh-tw') {
                $list_id = '14bcd7ca66';
            } else {
                $list_id = '37fcda3ad7';
            }
            //===================================
        }
        if ($api->listSubscribe($list_id, $email, $vars) === true) {
            // It worked!   
            return array('status' => 'success', 'msg' => 'Success! Check your email to confirm sign up.');
        } else {
            // An error ocurred, return error message   
            return array('status' => 'failed', 'msg' => str_replace('List_RoleEmailMember: ', '', $api->errorMessage));
        }
    }

    public function registerProduct($data)
    {
        $vars = array(
            'FNAME' => $data['fname'],
            'LNAME' => $data['lname'],
            'COUNTRY' => $data['user-country'],
            'ZIP' => $data['user-zip'],
            'PR_SERIAL' => $data['product-serial'],
            'GROUPINGS' => array(
                array('id' => '12621', 'groups' => $data['product']),
            )
        );
        $api = new MCAPI(API_KEY);
        $list_id = 'c0935dfbe8';
        
        if ($api->listSubscribe($list_id, $data['user-email'], $vars) === true) {
            // It worked!   
            return array('status' => 'success', 'msg' => 'Success! Check your email to confirm sign up.');
        } else {
            // An error ocurred, return error message   
            return array('status' => 'failed', 'msg' => $api->errorMessage);
        }
    }

    public function addUserToList($data, $listId)
    {
        $vars = array(
            'FNAME' => $data['fname'],
            'LNAME' => $data['lname'],
        );
        $api = new MCAPI(API_KEY);
        if ($api->listSubscribe($listId, $data['uemail'], $vars) === true) {
            // It worked!   
            return array('status' => 'success', 'msg' => 'Success! Check your email to confirm sign up.');
        } else {
            // An error ocurred, return error message   
            return array('status' => 'failed', 'msg' => str_replace('List_RoleEmailMember: ', '', $api->errorMessage));
        }
    }

}
