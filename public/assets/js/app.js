
//imports
import { $user } from "./elements.js";
import { user } from "./functions.js";

//users
$user.addFrm.addEventListener("submit", user.insert);