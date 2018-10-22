<?php
// ------------------------------------------------------------------------------
// @author		417solutions.com
// @notes		doesn't work when # is passed in somewhere inside the $password
// @attr		forbidden topology list from: http://blog.korelogic.com/blog/2014/04/04/pathwell_topologies
// ------------------------------------------------------------------------------
function common_password_topology($password){
    $forbidden = array("ullllldd","ulllllldd","ullldddd","llllllld","ullllllldd","ulllllld","ullllldddd","ulllldddd","lllllldd","ullllllld","ullllddd","ulldddds","llllllll","ulllllddd","llllllldd","llsddlddl","lllllllld","ullllldds","ulllllldddd","ulllllllldd","ulllllds","ulllllllld","ullllldddds","lllllllll","lllllllldd","ullllllddd","lllllddd","ullldddds","ullllllldddd","ulllllsdd","uuuuuudl","lllldddd","ddulllllll","ullsdddd","ulllldds","ullllllds","ddullllll","llllsddd","llllllllld","llllldddd","llllllllll","llllllddd","ullllllllldd","ullllllllld","ddddddul","ulllllllddd","ulllllldds","uuuuuuds","uudllldddu","ullllsdd","ulllllsd","lllsdddd","lllllldddd","ullllllldds","ddulllll","ulllllllds","ullllddds","ulllldddds","ulllsdddd","ullllsddd","ulllllldddds","ulllddds","llllsdddd","llllllsdd","lllllldds","ddddulll","dddddddd","ullllllsd","uldddddd","llllllsd","udllllllld","lllllllllll","lllllllllld","llllldds","llllddds","ulllllllldddd","uuuuuuuu","ulllsddd","ullllllsdd","ulllllddds","lllllsdd","ullllsdddd","ulllddddd","ulldddddd","ullddddd","llllllllldd","llllllldds","lllllllddd","llllllds","llldddds","uuullldddd","ulllllsddd","ulllllllsd","llllllllsd","llllllldddd","ulllllsdddd","lllllllds","lllldddds","ddddullll","uudllldddd");
    $pattern = "";
    for ($i=0; $i<strlen($password); $i++) {
        if(preg_match("/[A-Z]/",$password[$i])){$pattern .= "u";}
        if(preg_match("/[a-z]/",$password[$i])){$pattern .= "l";}
        if(preg_match("/[0-9]/",$password[$i])){$pattern .= "d";}
        if(preg_match("/[^\da-zA-Z]/",$password[$i])){$pattern .= "s";}
    }
    if(in_array($pattern, $forbidden)){
    	return true;
    }else{
    	return false;
    }
}
?>
