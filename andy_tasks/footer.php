<br>
        <footer
          class="card-footer d-flex justify-content-between bg-black"
          id="footer" 
        >
              <div>
                <a href="https://hamk.fi" target="_blank" style="text-decoration-color:none;">
                <img
                  class="img-fluid float-end"
                  src="HAMK_Logo.png"
                  alt="HAMK logo" 
                /></a>
              </div>
              <div>
                <ul
                  style="text-align: center; color: rgb(255, 255, 255)"
                >
                  <li><span style="text-decoration-line: none;">&copy; Designed by <a href="http://andy.io.vn/" target="_blank"> Andy Huynh</a></span></li>
                  <li>
                    <?php
                      $fileName = basename($_SERVER['PHP_SELF']);
                      $getModifiedTime = filemtime($fileName);
                      $lastModifiedTime = date("F j, Y H:i:s",$getModifiedTime);
                      echo "<p><i>Last modified " .$fileName. " on ".$lastModifiedTime.".</i></p>";
                     ?>
                  </li>
                </ul>
              </div>
              <div>
                <ul>
                  <li>  
                  <span style="color: white; text-decoration: none;">Course: Web Development</span>
                  </li>
                </ul>
              </div>
          </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </body>
</html>