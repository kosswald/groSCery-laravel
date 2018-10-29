# groSCery Laravel API

### Documentation:

- [Methods](#methods)
    - [Login User](#login-user) 
    - [Logout User](#logout-user) 
    - [Register User](#logout-user)
    - [User Details](#user-details)

Methods Table 

| Function | Method | URL        | Returns on success |
| ------   | ------ | ---------- | ------- |
| Login    | POST   | /api/login | JWT Token |
| Logout   | POST   | /api/logout | Nothing  |
| Register | POST   | /api/login | JWT Token |
| Details  | POST   | /api/login | User details |


## Method's Details

**Login User**
----
  Returns json token for a user.

* **Method and URL**

  `POST /api/login`

* **Form Data Parameters**

    ```
    email=[string]
    password=[string]
    ```

* **Success Response:**

  * **Code:** 200 <br/>
    **Content:** 
    ```json
    {
        "success": {
            "token": "[JWT Token]"
        }
    }
    ```
 
* **Error Response:**

  * **Code:** 401 <br/>
    **Content:** 
    ```json
    {   "error" : "Unauthroized"    }
    ```

**Logout User**
----
  Logs out a user.

* **Method and URL**

  `POST /api/register`

* **Header Parameters**

    ```json
    token="Bearer [string]"
    ```

* **Success Response:**

  * **Code:** 200 <br/>
    **Content:** 
    ```json
    {   "success": "[Token logged out"  }
    ```
 
* **Error Response:**

  * **Code:** 401 <br/>
    **Content:** 
    ```json
    {   "error" : "Invalid token"    }
    ```

**Register User**
----
  Register a user.

* **Method and URL**

  `POST /api/register`

* **Form Data Parameters**

    ```json
    name=[string]
    email=[string]
    password=[string]
    c_password=[string] //Confirms password
    ```

* **Success Response:**

  * **Code:** 200 <br/>
    **Content:** 
    ```json
    {
        "success": {
            "token": "[JWT Token]"
        }
    }
    ```
 
* **Error Response:**

  * **Code:** 401 <br/>
    **Content:** 
    ```json
    {   "error" : "Server error"    }
    ```

**User Details**
----
  Logs out a user.

* **Method and URL**

  `POST /api/details`

* **Header Parameters**

    ```json
    token="Bearer [string]"
    ```

* **Success Response:**

  * **Code:** 200 <br/>
    **Content:** 
    ```json
    {
        "success": {
            "id": [int],
            "name": "[string]",
            "email": "[string]",
            "created_at": "[yyyy-mm-dd hh:mm:ss]",
            "updated_at": "[yyyy-mm-dd hh:mm:ss]"
        }
    }
    ```
 
* **Error Response:**

  * **Code:** 401 <br/>
    **Content:** 
    ```json
    {   "error" : "Unauthorized"    }
    ```