<?php

$GLOBALS['TL_LANG']['tl_content']['aos_legend'] = "Animation";
$GLOBALS['TL_LANG']['XPL']['aosHelp'] = array(
    array(
        "Duration",
        "Duration accept values from 50 to 3000, with step 50ms, it's because duration of animation is handled by css, and to not make css longer than it is already I created implementations only in this range. I think this should be good for almost all cases."
    ),
    array(
        "Anchor placement",
        "You can set different placement option on each element, the principle is pretty simple, each anchor-placement option contains two words i.e. <code>top-center</code>. This means that animation will be triggered when <code>top</code> of element will reach <code>center</code> of the window. <code>bottom-top</code> means that animation will be triggered when <code>bottom</code> of an element reach <code>top</code> of the window, and so on."
    )
);

$GLOBALS['TL_LANG']['tl_content']['aosAnimation'] = array("Animation", "Select an animation to trigger");
$GLOBALS['TL_LANG']['tl_content']['aosOffset'] = array(
    "Offset",
    "Change offset to trigger animations sooner or later (px)"
);
$GLOBALS['TL_LANG']['tl_content']['aosDuration'] = array("Duration", "Duration of animation (ms)");
$GLOBALS['TL_LANG']['tl_content']['aosEasing'] = array(
    "Easing",
    "Choose timing function to ease elements in different ways"
);
$GLOBALS['TL_LANG']['tl_content']['aosDelay'] = array("Delay", "Delay animation (ms)");
$GLOBALS['TL_LANG']['tl_content']['aosAnchor'] = array(
    "Anchor element",
    "Anchor element, whose offset will be counted to trigger animation instead of actual elements offset"
);
$GLOBALS['TL_LANG']['tl_content']['aosAnchorPlacement'] = array(
    "Anchor placement",
    "Anchor placement - which one position of element on the screen should trigger animation"
);
$GLOBALS['TL_LANG']['tl_content']['aosOnce'] = array(
    "Trigger once",
    "Choose wheter animation should fire once, or every time you scroll up/down to element"
);
