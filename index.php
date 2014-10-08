<?php
/*******************************************************************************
 * Copyright (c) 2014 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Denis Roy (Eclipse Foundation) - initial implementation
 *******************************************************************************/

        require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
        $App    = new App();
        $Menu   = new Menu();
        $Nav = new Nav();
        include($App->getProjectCommon());

        #
        # Begin: page-specific settings.  Change these. 
        $pageTitle              = "Polarsys - Capella Project";
        $pageKeywords           = "Polarsys,Capella";
        $pageAuthor             = "Your name";


        $html = <<<EOF
        <h2>About this template</h2>
        <p>This is simply a blank template.  You can place common elements in _projectCommon.php as it is referenced by this file.</p>
        <p>For help with the template, you can <a href="https://polarsys.org/cgit/cgit.cgi/polarsys.org">browse other Polarsys project website code</a>, read
        about the <a href="https://polarsys.org/wiki/The_Forge">Polarsys Forge</a> or ask webmaster@eclipse.org.</p>

EOF;


        $App->generatePage("polarsys", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
