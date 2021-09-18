
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <title>BYU-Idaho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/prism-coy.css" />
    <link rel="stylesheet" href="css/course.css" />
  </head>

  <body>
    <div id="content">
      <header class="headerBanner">
        <div>
          <h1>Advanced CSS</h1>
          <h2>WDD 331</h2>
        </div>
      </header>
      <main>
        <h1>Lesson 1: Software Installation</h1>
        <hr />
        <p>
          This semester we will be using several tools as we learn more about
          HTML and CSS. Below is the list of things you will need to install and
          setup. Even though we will not be using many of these for several
          weeks I highly recommend getting them all installed and verified as
          working this week. You will have a much better semester if you do.
        </p>
        <!-- <h2>Ruby</h2>
            <p>We will be learning to use the SASS CSS Preprocessor this semester. SASS must be compiled before sending it to the browser. We will be using a Node.js Sass compiler. Becasue of this make sure to complete the Node installation instructinos above before continuing.</p>
            <ul>
                <li>To download Ruby for
                    <strong>Windows</strong>, click this link:
                    <a href="http://rubyinstaller.org" target="_blank">http://rubyinstaller.org</a>. No payment or email is necessary. This is a single-click installer. Download
                    version 2.4.x which is located on the left side of the page. When asked if you want to run this software,
                    choose 'run'.</li>
                <li>Those who are using
                    <strong>Mac</strong>, Ruby comes pre-installed (on Mac OS 10.3 or newer). To check which version of Ruby you
                    are running on your Mac, navigate to the Utilities folder in the Application Files. Open Terminal and
                    type (without the quotes): "Ruby -v". Ruby programs can be created using any text editor. Ruby programs
                    and scripts typically end with the .rb extension.</li>
            </ul> -->

        <h2>NODE and NPM</h2>
        <p>
          Node is a Javascript runtime that has gained a lot of popularity in
          the last few years. There are many helpful tools and utilities that
          can be run using it. NPM is the Node Package Manager. It gets
          installed automatically with Node and is used to add and remove
          utilities. (For more detailed instructions visit:&nbsp;
          <a
            href="http://blog.teamtreehouse.com/install-node-js-npm-windows"
            target="_blank"
            >http://blog.teamtreehouse.com/install-node-js-npm-windows</a
          >)
        </p>
        <p class="callout">
          BEFORE following the instructions below make sure that you do not
          already have Node installed. Open up a terminal (Mac) or CMD
          prompt/powershell (Windows) window and type <code>node -v</code>. If
          it gives you a version and NOT an error you already have Node.
        </p>
        <p>Windows Users:</p>
        <!-- convert to nvm-windows? https://docs.microsoft.com/en-us/windows/nodejs/setup-on-windows#install-git-optional -->
        <ol>
          <li>
            Download the Windows installer from&nbsp;the&nbsp;
            <a
              href="http://nodejs.org/"
              onclick="__gaTracker('send', 'event', 'outbound-article', 'http://nodejs.org/', 'Nodes.js&reg; web site');"
              target="_blank"
              >Node.js&reg; web site</a
            >.
            <strong
              >You will want to grab the Recommended version (LTS) instead of
              the latest version!</strong
            >
          </li>
          <li>
            <strong>Run the installer</strong>&nbsp;(the .msi file you
            downloaded in the previous step.)
          </li>
          <li>
            <strong>Follow the prompts in the installer</strong>&nbsp;(Accept
            the license agreement, click the NEXT button a bunch of times and
            accept the default installation settings).
          </li>
          <li>
            <strong>Restart your computer.</strong>&nbsp;You won&rsquo;t be able
            to run Node.js&reg; until you restart your computer.
          </li>
          <li>
            To verify that it worked type the following in the command prompt:
            <code>node -v</code>. &nbsp;If you get the version number back you
            are good to go.
          </li>
        </ol>
        <p>Mac Users:&nbsp;</p>
        <p>
          For the mac we are going to install the
          <a href="https://github.com/nvm-sh/nvm" target="_blank"
            >Node Version Manager (nvm)</a
          >
          tool first, and then we will use that to install Node. There are a
          couple of advantages to doing it this way...the biggest of which is
          that it makes it really easy to switch versions of Node when needed
          (happens more than you might think as a developer) Before we can
          install that however, we need the Apple developer tools. You can get
          those in one of two ways:
        </p>
        <ol>
          <li id="xcode">
            If you think you will ever want to build native MacOs or IOS apps
            download and install <strong>XCode.</strong>&nbsp;Apple&rsquo;s
            XCode development software is used to build Mac and iOS apps, but it
            also includes the tools you need to compile software for use on your
            Mac. XCode is free and you can find it in the&nbsp;
            <a
              href="https://itunes.apple.com/us/app/xcode/id497799835?mt=12"
              onclick="__gaTracker('send', 'event', 'outbound-article', 'https://itunes.apple.com/us/app/xcode/id497799835?mt=12', 'Apple App Store');"
              >Apple App Store</a
            >
            but it is quite large! &nbsp;After you install it, open it at least
            once to accept the Terms. &nbsp;The next step won't work unless you
            do.
          </li>
          <li>
            <strong>*Recommended for most!</strong> If you don't want to
            download and install the full XCode (It's quite large), you can
            install just the developer tools by following
            <a
              href="http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/"
              target="_blank"
              >these instructions</a
            >.
          </li>
        </ol>
        <p>Installing Node and NPM with nvm is pretty straightforward.</p>
        <ol>
          <li>
            To install nvm, <strong>open the Terminal app</strong>&nbsp;and
            type:&nbsp;
            <pre><code class="lang-bash"
              >curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh bash</code
            ></pre>
          </li>
          <li>
            Once nvm is done installing you can grab the latest copy of the Long
            Term Support (LTS) version by typing the following:
            <pre><code class="lang-bash">nvm install --lts</code></pre>
          </li>
          <li>
            To verify that it worked type the following in the Terminal:
            <code>node -v</code>. &nbsp;If you get the version number back you
            are good to go.
          </li>
        </ol>
        <div class="callout">
          <p>
            Since macOS 10.15, the default shell is zsh and nvm will look for
            .zshrc to update, none is installed by default. If you get an error
            installing above, create this file by typing the following in your
            terminal:
          </p>
          <pre><code class="lang-bash">touch ~/.zshrc</code></pre>
        </div>
        <h2>SASS</h2>
        <ul>
          <p>
            We will be learning to use the SASS CSS Preprocessor this semester.
            SASS must be compiled before sending it to the browser. We will be
            using a Node.js Sass compiler. Becasue of this make sure to complete
            the Node installation instructions above before continuing.
          </p>
          <li>
            <strong>Open your Terminal or Command Prompt.</strong>&nbsp;On the
            Mac the Terminal.app comes installed by default. It's located in
            your Utilities folder. On Windows, run `cmd`.
          </li>
          <li>
            <strong>Install Sass.</strong> In your open terminal window type:
            <code>npm install -g sass</code> This will install Sass and any
            dependencies for you.
          </li>
          <!-- <li>
                    <p>
                        <strong>Mac:</strong>If you get an error message on the Mac then it's one of two things. First
                        is you may
                        need to use the&nbsp;
                        <code>sudo</code>&nbsp;command to install the Sass gem. It would look like:
                        <code>sudo gem install sass</code>
                    </p>
                    <p>Second you don't have Xcode installed. Follow the
                        <a href="#xcode">directions below</a> and install Xcode then come back and run this command
                        again.</p>
                    <p class="callout">On Windows the Ruby installer does not always add the Ruby executable to the
                        Path so you may get an error
                        saying that 'gem' not found. If you do then go back to Search and enter 'Ruby'. You should see
                        an
                        option for "Start Command Prompt with Ruby" Choose that then run the
                        <kbd>gem install sass</kbd> again. You will only want to use this special CMD window to do this
                        step.
                        For the next step go back to the normal CMD.</p>
                </li> -->
          <li>
            <p>
              <strong>Double-check.</strong>&nbsp;You should now have Sass
              installed, but it never hurts to double-check. In your terminal
              application you can type: sass --version
            </p>
            <p>
              It should return something like:
              <code>1.14.1 compiled with dart2js 2.0.0</code>. Congratulations!
              You've successfully installed Sass.
            </p>
          </li>
        </ul>
        <h2>StyleLint</h2>

        <div class="callout">
          <p>
            CSS Linters point out problems with your CSS code. They do basic
            syntax checking as well as applying a set of rules to the code that
            look for problematic patterns or signs of inefficiency. The rules
            are all configurable, so you can easily write your own or omit ones
            you don't want.
          </p>
        </div>
        <ul>
          <li>
            Open your command line (Terminal on the mac, Run-&gt;cmd on Windows)
          </li>
          <li>
            Enter the following:
            <pre><code class="lang-bash">npm install -g stylelint stylelint-config-standard</code></pre>
          </li>
        </ul>
        <h2>Analyze-css</h2>
        <p>
          <span
            >Like CSS Lint, analyze-css inspects your CSS for complexity and
            performance.&nbsp;</span
          >
        </p>
        <ul>
          <li>
            Open your command line (Terminal on the mac, Run-&gt;cmd on Windows)
          </li>
          <li>
            Enter the following:
            <pre><code class="lang-bash">npm install -g analyze-css</code></pre>
          </li>
        </ul>
        <h2>UnCSS</h2>
        <p>
          <span
            >UnCSS looks at your HTML and CSS files and removes unused CSS! This
            is great especially if you choose to use 3rd party&nbsp;libraries
            like Bootstrap.</span
          >
        </p>
        <ul>
          <li>
            Open your command line (Terminal on the mac, Run-&gt;cmd on
            Windows).
          </li>
          <li>
            Enter the following:
            <pre><code class="lang-bash">npm install -g uncss</code></pre>
          </li>
        </ul>
        <h2>SitePoint</h2>
        <p>
          We will be using materials from SitePoint.com (http://sitepoint.com).
          You will need access to their premier resources. The University has
          set up a special pricing for students of $13/semester. You must
          purchase an access code through the
          <a
            href="https://www.byuistore.com/p-28053-sitepoint-premium-access-code.aspx"
            target="_blank"
            >BYU-Idaho bookstore</a
          >
          (ISBN: 281000004207B). Then use the URL that accompanies the access
          code to create a SitePoint Premium account.
        </p>
        <!--
            <ul>
                <li><a href="https://www.sitepoint.com/premium/students" target="_blank">To sign up access SitePoint through this url</a>, fill in your&nbsp;name, email (<strong>this must be your @byui.edu email)</strong>, and a password. Then select the reduced price annual membership and enter your payment information.&nbsp;</li>
            </ul>
-->
        <h2>CodePen</h2>
        <p>
          CodePen is a site that allows designers and developers to quickly test
          and share HTML, CSS, and JavaScript code. We will be using it to do
          the same this semester.
        </p>
        <ul>
          <li>
            You&nbsp;can sign up for a free account. To find the free plan
            you&nbsp;need to navigate to the
            <a href="http://codepen.io/" target="_blank">CodePen website</a>,
            click the Sign Up in the upper right hand corner, and then scroll
            down. The free plan option is below the paid plan options. Click
            Sign Up and enter your information.
          </li>
        </ul>
        <h2>Code Editor</h2>
        You will want to have a good code editor installed on your computer as
        well. If you haven't found one you really like yet I have a couple
        of&nbsp;recommendations:
        <ul>
          <li>
            <a href="https://code.visualstudio.com/" target="_blank">VS Code</a>
            (https://code.visualstudio.com/): Free, Mac/Windows/Linux, good
            general purpose editor with great Git support.
          </li>
          <li>
            <a href="http://brackets.io" target="_blank">Brackets</a>: This is
            an open source project run by Adobe. It excels with HTML/CSS/JS. It
            also has a strong following and many useful enhancements.
            Mac/PC/Linux - Free
          </li>
          <li>
            <a href="https://atom.io" target="_blank">Atom</a>: This is another
            great open source project. It also has some very good plugins, and
            has great builtin git support. Not quite as strong for
            HTML/CSS&nbsp;as Brackets, but probably better for other languages.
            Mac/PC/Linux - Free
          </li>
        </ul>
      </main>
      <!-- end #article -->
    </div>
    <script src="js/course.js"></script>
    <script src="js/prism.js"></script>
  </body>
</html>
