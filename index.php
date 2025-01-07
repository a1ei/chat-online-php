<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
</html>
<body>
<div class="content"></div>
<div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

<!--卡片-->
<div class="wr_cardm">
  <div class="wr_card">
    <svg class="wr_weather" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 100 100" xml:space="preserve">  <image id="image0" width="100" height="100" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAMg0lEQVR42u2de5AcVb3HP7/unZ19Tt4vQsgGwpIABoREEVJqlFyLwgclEsmliFZULIWgqFHxlZKioBRKIVzBRwEmKUFQsQollhCzAW9xrzxKi/IiybVAgVjktdlkd3Z3errPzz+6Z3d2d2a3Z7bnsaF/VVvdc/qc032+nz3nd87p7tMQW2yxxRZbbLHFFltsscVWXZNaX0Ap1ruLeQ1ZlqN0CsxXQ6vCdFHaMKBCnxp6BNKqvCHKXs/mpfYPcaDW1x7W6haIdtGQdVlllDUoa1RZJTANBRQ02A79ZuTvEXEMPcBzCrvF0NUyj+dkDW6ty1jI6gqIbsEafBdrxLAB5TJRUqq5g1AWjLz0eWHH1fBrhO1te9kj38bUuuw5qwsg+hRzHJdNKB9HWTRCVIgaxoi0anhNlPvV5q7UVRyutRY1BaK7mOfYfEaVG0RJjREVKgpjRJghrXCv7XBb6zW8XitNagJEn6bZyfB14EsoyYKiQvVg5MVTwyDCbak2bpV1DFRbm6oDyXbxflW2IiwpKFYNYeTSql9jXka4ftoneaya+lQNiHbRloUfAlcNFbpeYYw8vj2T5dp519F3wgAZfIozLcPDKGdNJRh+HEGVvWp03cxreaHSWlmVPkHmSa4Sw/NTFQYKAmdYIv/bcxdXTmkgThebMGwXpWmqwsi7tmaDPHB0K1+cckBUkcwebkHYKsE5pjgM1K8pAnL70Tvk5ikFxHmKmwVuHL/QUwvGiHjC1498X26qhHaRO3VnD58FfnDCwhiRVj8/8wvcWbdAMk9xJR4/O5GaKcZJq4pRox+dvZlf1h2QzB85C5dnBFreDDCG4hnSanTV7K/ytyh0jMSH6NM0i8sDbzoY/rFWRB7ev8Uve10AyTr8AFjxpoMRHBc4O9kkd0Sh5aSbrGwXFys88WaFkR+m6Hvn3Mjuyeg5qRqif6VRlbtiGP5WPLln350kawYke4gvIyyLYQyFd844xucno2nZTZZ2MduBf6C0xjCGf6vS2+hpx/Rv012OrmXXEEf5XAxjbLkF2rOWXF+urmXVEN1JKpPkHwIzYhhjy61Kt6S1Y85t9JaqbVk1JJPk0zGM4uVGmUkz15SjbVlARNkYwxi/3MbIxqoAcXbxNmBZDGP8cotw5sFv8NaKA1Hl6hjGBOXOlcnI1RUHAnw4hhG6TB+pKJDBx1mOclIMI2SZYNHBzZxeMSCW/9BzDKOEMhnhPRUD4ilrYhillQmVygEROD+GUUKZ/HKdV6LG4Ux3khy0SItixzDCwQjO7fUOamvnXWTC6NwQFoijdJ5oMFTBM+B54Hr+vprhtLZAgwV2sF8qDBREsdsaOQ14MVIgatOJOTFgeB44LgxmIeP6+9qQwmqbj900C+Nm8PqP4Pa8RkIMjTYkbWiyIWEFzUoIGENhhjOiB2KYV46g9QTDMzDoQH8W0hlILnonqbM/QvuSd5Gc2xlclw5tvUya/tefp+eF39L9wsMkeg/RloTWhF9jQsFQEJgbVudSgLTn/jOmIgzH9SEcH4TGJZfQsXYLLQvOGboW1WEQGgRKooXWJatp6VjN/Eu+xZFntnP4iVsY6DvK9GZIWhPDCPbbw+ocupclSttUhZFx4Wg/HDMzmHfZTzltwyM0LzgHo4qqjtkW+qOhiVnvuIZTv/Ac5tRLOdzn5xvG+YuR6IEQAJlqMJwARjpxMh0bdzFjxUd94U0g9qitMeNDsltnccqGHTRd9CUO94HjjQ8jKHcqrMyhmywUo8XazTqF4XpwbADS9nw6P9VFYtpCX9g8PzHcPdWiWw1OkL+d+76vcUDh2P/czsym4XMKY8utSg5bdEAM9MkUgqEK/Rk47jSyeMMOEqkARnAxhbfFAYzdwpz/+Ar/OriPA3sfxQQ90ITl+5akBQnbb4JENfSdw9BARINXuqYIjKwLvRmYtfortC6+EBNELARiuMYUBzC25vjnn3flPWj2+9CQxO09QLb7ddL7nuT4iztpOPQSqSQ0SfjX4cL3spTjBfvfdQgDhX4HnOYOFl/0uTE1I7/JogiQ8Zqw3LkVBSsByQZQsKctxE4tJNnxNli7md4Xf8/h391KqvulwciBAP+aKjA84481Zq3ehDQ0YcxE4g43QwVhjYgzftx88K3L19J8+rsZ+NvO5dz/mVAih+5l2creeobhGb+ZGggGfY7XxLS3rCvajQ3T1R2KU6RHpkaHemzFem5YDTSd+YFrX3719W+G0Tn85GIXDekjpEVprCcYWdcfffdmICPttHZ+kOZFF9A0/2yaTjo/lH8Y20wN/5cX9zfF8y1YA1XVGF1/+qmLH4oECED6F7wILK8HGCaYBunphwHTzIwLb2D2hdcjiZZI/MPE/mY434nzGwLWi5ddunTp0oPFNC7Fh4DyDLC8HmCkB/0xRiYxn1PWP0zTgnP9eKaYGCP9QRHBxvclBfxEuPyG8m1Xy/4msKmYxCXdoFKlq55g9GuKxR97jKYF54b3D6NH5CX4hxF+okyfZIxufG7//qIv95R2T92wu9Y+IxM47X4HTvrAVhpnLi3NQU8yzlDcMoCqGlBa2vozayMB0rKe1zDsqxUMx4WBjD+pl1ywkvbll1UIgCkap5S4RWuJmtWRAAn0e6hWXdusO3xDacbKT6CEEWxYuErVpJLzM7owMiCey3YTzM9VE4bjQtYDT8E1QvOpF088YztRsxJhU1YKJA9mRQZk+gb+LvCnasJQHb7vbTywk9OxW2aV1/bnb0MCndA/lArJmIi6vYEZ5SeWckG1YKgJaobn97KslplDhR5KN6o7Ot64YXR3tJrjkSDf/ZHVEIBUPzvU8M9qwEDB5Hd7Fbz+7iq1/aaE/Ezoc2JMV6RA5NNkVfleNWDkH/cMiII32EO2vyevWQknhhYQbtIOutQ4xhxvSdp7IgUCkGrlJ2p4o9IwCJosVR+GJYBR0v//xKiCTjzRN65/qBIko/xXZ2dn0YfmygYi6xhAubHSMPLDBB+IKvT+5YFoBZsAZGiHP845jZpD6iS/O56uk3pPPfUJtqHsqTSM3I2x3LNQtgX9r/yR/r//oTLNymRqSXGQrmKuWrnytGMVAyKCWobrVMlWtGYEWyuYm24Mnoc69OgNOMf2V6ftDw3JjG2mjDGq3qZVK1Y8MZGmk158pv0a/g/DTZV88NkK0iVsH07C8muL23uQAw9ciXPkleC/0JQgrikBgJkEJHNc4EOrzl3xwzB62pMFAnDr+fz3YJu8Q+C0qGHkjuWe6jDG723ZEozc092k//oIVnIaibnLQCw/fRnjkqFxwiTHGsFpXcXca3uJK1aed9bzYbWMbAGz3ruZ6yF/JvfKW0QwgnKSzT0UrdA76IMxxp/1NUG8humLaV52KY0dF2G3z8NumY0R8L99MFbkXN6BhAXEHT2QDOKavHwEYxpbe0VIo7IfNa8qPK6O9ejb3372G6XqGOkSf8fu5gJjZBf5S25EACP3e8AZfn0g7QSCBeFZb1Ra8tJSJH/GuYa8sBH7eWGiDExP6sXnPcTTUWkY+SKYPVu52CCP5e69RwUDBTe4bZsbJKYdv5YQNGWu58PyCog5ZmxDuOsqBEMBC7JtSb38/Af5TZT6VWSp8e47uRqVbYBEBSMXJzfri/pN1WBQO3Iv2pRUM8qEgcEkbd14zs/ZFrV2FVv7vfsO/lON/FQgERWMXNqs5985zD/uun4NMqPOUS6MgmH+L8dCP3Xug2yvhG4VXYz/6O28V0V+jdIeFYxcmAmew3K9AmmjgjEqrUAadN0ZO9hZKc0q/nWEQ7exSlR+JbAoKhij47jesIMvmv8kYajymuvp5ct+xrOV1Ksqn6s4dguzsrZsE7g0Shih0kYBw/Bby9OPn7yDI5XWqnofdFGk+ztsViM3wfBnjuocxqCqfmPR/Xwvbx7ixACSswO3sNRS2SrKJfUMw8BuT/S6JfdGs2J1WKvZV9oO3swVovJdlI56gqGGVxDdvOg+flULXWr72bwfkThygPXGyI3o8KJoOcGqDONlNfqdAwnuX/ljsrXSpD4+LLkF65ByOSobFdaKYlcDhiqeGB5X0ftOXsgj9fDFz7oAkm8Hv8YCI6wXI1eoslKgIUoYanBVeRb0F67Dg0u2UfIEYCWt7oDk2+EtpLL9vBOR9+B/nHgZyuxSYKjhELBX4FlFdycdnpxzX+nLt1bL6hpIIXv1BmY2QqdRTgZaBdpM8PluC/rU0Af0eR77Ncu+U+4tb4Xp2GKLLbbYYosttthiiy222GKLLbbYYottfPs3GPtpnh9ZV0oAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDItMTdUMDg6MDM6MDcrMDA6MDBPnKiVAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAyLTE3VDA4OjAzOjA3KzAwOjAwPsEQKQAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMi0xN1QwODowMzowNyswMDowMGnUMfYAAAAASUVORK5CYII="></image>
    </svg>
    
    <div class="wr_main">23 °C</div>
    <div class="wr_mainsub">中国，北京</div>
  </div>
  <div class="wr_card2">
    <div class="wr_upper">
      <div class="wr_humidity">
        <div class="wr_humiditytext">Humidity<br>30%</div>
        <svg xml:space="preserve" viewBox="0 0 30 30" height="25px" width="25px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" class="humiditysvg">  <image href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABiVBMVEUAAAAAAP9NerV/f39O
          e7ZQfLZVf6pRfbfL5fdRfbZIbbZmmcxols5nl85OebSPsteLrdVSfLZxl89ok9FqlM5ahsBdicNa
          hsFcicRhjcdWgbpahsFfi8ZbhsFijsmErOWLt+9xndZcicJahsFahsFdicN5n81xjcZqlNRpls1q
          lNBfn99pls9nkcxXgrpZgrtik81OebWNsdeMrtZOebRNerVZg7pwmMhNebRKdLRNerZNebHZ8v9o
          lM9jj8rV7v3W7v1ch7+Ktu6Lt/CEsep7p+Cz1PO+3fqJte5/q+V+quOUvvLY8f+TvfKpzvapzfaq
          z/aRvPGdxfSVv/LX8P/W8P+32fnK5vyMuPCmzPXW8P6ny/WWv/KOufGawvO22PjJ5vzB4PrU7v6i
          yPSz1fiYwfKOufDD4funzPXF4vvE4vuOuvHV7/7U7/7G4/uNufCx1Pew0/ev0veu0feQu/G01viP
          ufF/q+SCrud+quSItO2kyvWjyfVijslrltFmkcyEqtZgjMf///8NXQssAAAAPHRSTlMAAZgCW+EG
          y+jMBxRaRXHC2H8bX0ry/vrhyvnw0PDHR0Be/e/4/f4SDDNiEFVb0eI5iMHCho7NwI0YOBdy59Cm
          AAAAAWJLR0SCi7P/RAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+cCEBITAJMBs+kAAAFb
          SURBVCjPY2CAAUYmZgY8gIWVBY8sGzsHJxc2CW4eXiDJx28jIAjiCgnzgoV5ebiBpIiomK2duISk
          lL2Ng6O0jIwsmCsnIW5nKyYqwiDv5AwELq5uNjY27h6enh5grpcLiHKSZ1BwBgNvH6C0j68zKlCA
          SfvZgIA/LukAsHQAVDgwCE06OAQoGxoMlQ4Lj0CVdo6MsomKhrJjfGwi0aSdY+NiYcx4G5sEdGkk
          kGhjk4RHOjnEJgWPtLNvKprL07CpgktHpEfgk/a3ycAnnWmThRDMxpDOscmFi6Xl5aNLF+QUwqWL
          bIoxogQBSpJskkpwS5cC4yYFp3RZElA6qQwh7VFeAWZXVFYByWpwxNcAueUeQGlFJWUZCZXauloV
          CRllVdt6NbB0QyOIq6TIoK4BSrWaWpogSltHVw8srW8A4mqoY6R6QyOgrLEJztxiamZuZsGGOztZ
          WlnD2QBCYbJl9Cx9XAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMy0wMi0xNlQxODoxOTowMCswMDow
          MG/wqfUAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjMtMDItMTZUMTg6MTk6MDArMDA6MDAerRFJAAAA
          KHRFWHRkYXRlOnRpbWVzdGFtcAAyMDIzLTAyLTE2VDE4OjE5OjAwKzAwOjAwSbgwlgAAAABJRU5ErkJggg==" y="0" x="0" height="30" width="30" id="image0"></image>
          </svg>
      </div>

      <div class="wr_air">
        <div class="wr_airtext">Wind<br>8 Km/h</div>
          <svg class="wr_airsvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve">  <image id="image0" width="30" height="30" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABaFBMVEUAAAAA//8ilfIhlfMg
            lvIglfMglvIeku8cjf8glvMhlfIflvMhlfIhlvIglvMhl/MglvIglfIglPEfmfIhlfIglvQfn/8g
            lfIglvIhlfMglfIglvMhl/AhlfIcm/AAf/8qlOkglPYglvIZmf8zmf8hlfIglfIXi+cilPMhlvMg
            lfQhlvMglvIhlfIgl/MglvMhlvMhlfMhlvIfl+8hlvMhlfMglvMglvI/f/8hlvMilvMelvAglfIg
            lvMhlvIglPIglvIhlfIkkfUglfMglfMhlvMhlvMilvMjlfEglvMhlfIhlfMglfIflvEnnOshlvIf
            lPEflfIek/QglvIglvMhlfIime4jlPAglvMglvEhlvMhl/MglfMglfMhlvIak/Edk/UhlvIglfMg
            l/IglvIglfIilPIhlvMhlfMhk/Eqqv8glvIglfMcl/UhlfMhlvIhlvMhlfIglfIhlfIgl/QflPQh
            lvP///+FIn/GAAAAdnRSTlMAAVKu1MmNIQmy91ig/Z5s0fo3KP5dCL27Lvm0NvwSAgwf+woFv7oL
            Q0RGa9L1Vtndx4sgme3FZgTIFiI/hvZld3sch8Tv7kI683nV6DgN4GBQMsycjw8k6nWqRW3cUxMa
            5dpnfLU87N8mBrxXG5jnibjLoi8YaHuXCQAAAAFiS0dEd0Zk+dcAAAAJcEhZcwAACxMAAAsTAQCa
            nBgAAAAHdElNRQfnAhEIBBbLW8PtAAABJ0lEQVQoz62RZ1fCMBSG46atomBR1IJ7g+KotKKgxYl7
            4Z6493x/v6T0QKMtn/p8ec/Nk5Pc5BLiHCWlZeUVlVU21sWBwgvWuho1bqG2Dh6vla0X4ctGQyP8
            VrqpuUVPCQGXlQ+26tEGtBfpX0JHp73t6kYPs9Db159nYDAEj8RoNxjCQ+xxvuFIgZHRMcemQMi4
            iP+I8kRU0TUHG9RJqpWYFVPTcahKsc/jkSAzfgNuVvvjk5gj84W7FhZZvYRl4o0apFawGmT0GsKm
            an0DmzS31O3cQgo75t27SNLYQyRNc/8AhzkROzrOPjCEE1poMk7Pzi8Sl7gyxp5B/Fq4Aa//A7m9
            y7V6/2Ac+/hEy8CzUb68ysDbezp/rZL5+Pz6NvWh/TgwzV+1HV523WQ81AAAACV0RVh0ZGF0ZTpj
            cmVhdGUAMjAyMy0wMi0xN1QwODowNDoyMiswMDowML1dmzYAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
            MjMtMDItMTdUMDg6MDQ6MjIrMDA6MDDMACOKAAAAKHRFWHRkYXRlOnRpbWVzdGFtcAAyMDIzLTAy
            LTE3VDA4OjA0OjIyKzAwOjAwmxUCVQAAAABJRU5ErkJggg=="></image>
        </svg>
      </div>
    </div>

    <div class="wr_lower">
      <div class="wr_aqi">
        <svg class="wr_aqisvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" xml:space="preserve">  <image id="image0" width="20" height="20" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABBVBMVEUAAABL4f9O5v9P5f9Q
          5f9R5/8AZsxB0vYAd9EAeNQAd9MeoOM1w/EYmuIZm+IXnOIAAP8AccYmrOgYmuAWneEA//8AdtQZ
          m+JP5f8ZmeUAf89L3vwcoOQYmeIAddEAeNUrseocjeIAd9QAeNMxu+4kqucZmuEYm+IWmeI5xfIf
          n99P3/9Q5v9Q5v9Q5v9G2Pk0wPA+zfZN4v5L3/w+zfUyve8iqOcrs+s9zPVM4f1N4v1E1vklrOki
          p+cmrOhH2fpP5f5F1/kstewqs+tO4/4nruott+0or+pL3vxE1flK3vxA0fcjqecrtOxO5P4yvvAs
          tOw6yPNA0Pc7yfQ4xfI3xPL////cI4U2AAAALnRSTlMAEXF3ZWsFeC3S26iVh7MsAQnAVCIBZ7Ft
          ChBv6GonVZQJs4yLxtPNLY8IEHuINVg0ZAAAAAFiS0dEVgoN6YkAAAAJcEhZcwAACxMAAAsTAQCa
          nBgAAAAHdElNRQfnAhIFCRn0J5yMAAAAq0lEQVQY02NgIAkwMjFDARMjXJBFDw5Y4IKsCEFWmBgb
          u56+gaERsiAHJxe3nrGJqZm5haWeFQ8vHz9QUEAQqt3a1MbWTkhYRBRmprG9A5qZYuJ6jk62ziYu
          QEEJSaiglDRIjaOpraubu4wsupM8PL2g2gXk5BX0vH18LYwgZiqCLOJQUlbR0/Nz9LcNCAwKVlVT
          10DRbh1iGqqphc+b2ANEW0cXCnS0SQt0ALCcIug70CWhAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIz
          LTAyLTE4VDA1OjA5OjI1KzAwOjAwRMIpTAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMy0wMi0xOFQw
          NTowOToyNSswMDowMDWfkfAAAAAodEVYdGRhdGU6dGltZXN0YW1wADIwMjMtMDItMThUMDU6MDk6
          MjUrMDA6MDBiirAvAAAAAElFTkSuQmCC"></image>
        </svg>
        <div class="wr_aqitext">AQI<br>30</div>
      </div>
      <div class="wr_realfeel">
        <svg class="wr_rfsvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" xml:space="preserve">  <image id="image0" width="20" height="20" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABuVBMVEUAAAAAAAAECQkIDg4E
          BAQAAAAAAAAFBQUHDAwIDg4MFBUNFRUKCgoPGhxGenw/b3FDdXcmRUYJDAwJDw9Pi40LFBQNFhYM
          FhYPGhsMExUKEhIPGhoKEhQMExMOGhoMExMPGhoKFBQLExMNFxcKEhILFBQKExMKExQLEhILERMK
          EREHDQ1SkJMuUlMABAQAAAASHh9FeXtAcXI8aWszWlwvU1M4Y2QjPT4NGBoAAAAAAAAAAAAAAAAA
          AAAAAAAAAAAAAABYmZtWlplKgoVlsbRsvsF0zM9uwsVuwcNsvb9ecU53czF0bStgbkdqt7dntbhp
          tbVxaCf5uxD+vxD7vBBTUilYlZdtwMNms7Zdc1P8vRDYpBR5b0imsKy0wcFzhoZdkpRldEx6cU3W
          5eWLnJxdm51otrlZdl67kBWxvbmUo6RmfHxajo9ouLpqt7mJdiN8YxnH1dWVpaVfn6Jgl41OUUKv
          u7pWe3xwxsldn6KmtLTO3NxUf4BswMN0ys1gpaedrKzT4uJjd3dsvcBqubxXg4Vgd3hthYVid3dh
          dnZof39shYVkf4BVeXpqt7pksbJjr7Jdo6X////f0mPcAAAAQXRSTlMABGh/a1xUZIqPo7BH2vv4
          /vJQgvyxwLLCpqXBsafBqcKutcCwuamtop+SgPzwOQzg/f728fD166Zla1o/PiEmFs+XjUIAAAAB
          YktHRJKWBO8gAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH5wISBQ8aO3RqsAAAAQlJREFU
          GNNjYMAOGJmYmVlY2djYmZk5OLm4ecBivHyOTs7O/ALOTo6Oji6ugkJAQWERNxTgLgoUFEMVc/MQ
          BwpKuLl5enn7+PpBBf0lwYIBgUHBwSGhYeFgwQgpoKC0W2RUcHB0TGxcfAJYuwxYMDE4OCgpGQhS
          UoGCabJAQTm39KDgjEyQYHJWdo5brjxQUMEtLz+ooDAZAoqKXRXBgm4lpWXJMFBeoQQUVHZzq6yC
          i1XX1KoABVXr3OobYGKNTc0takBBdVc3t9a29vaOzq7unt4+t34NoKDmBFRvTtQCCmrroArq6gEF
          9Q0MnY2MTUxNzYxBwNwCHMj6llbWNrZ29jZg4IAjKhgAAWdbVO4nzP4AAAAldEVYdGRhdGU6Y3Jl
          YXRlADIwMjMtMDItMThUMDU6MTU6MjYrMDA6MDCumAyfAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIz
          LTAyLTE4VDA1OjE1OjI2KzAwOjAw38W0IwAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMi0x
          OFQwNToxNToyNiswMDowMIjQlfwAAAAASUVORK5CYII="></image>
        </svg>
        <div class="wr_realfeeltext">Real Feel<br>21 °C</div>
      </div>

      <div class="wr_pressure">
        <svg class="wr_pressuresvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" xml:space="preserve">  <image id="image0" width="20" height="20" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABNVBMVEUAAAAAr8EArMAAqsAA
          rMEBrMEBrMAAq8AArb8AqsIBrMEgtMa53+S53+QetMYArMEArMEAqrsArMA9scFegp4Cqr8Ao8gA
          rMEErMHn6+wTobgArMAArMBCvc1sco8Aq8EArMFSqrmNWn1Dvs4Aq8EErcLo7O0SorgArMAAq8A8
          sMBie5gCqr8BrMEftMa23eO33uQcs8YAq8AArMAAq8ABq8AAq8EAq8Mtdn9DW2OvvcSwvcSrucJ3
          kZyvvcWvv8OruMJ6kZ55kJ2rusAArMHFzdLH0NS5xMru7u7l5+jm6Ojp3eDd4OK2ubvAhZL4G0en
          rK1YYWV3foHu7e39Mlns7OwzXWQxW2Tl5+f6VHSssLKpra/9MVnc4OL1m6y5xcvv09kxcX5FWmR4
          kJywvsWsusL///80ikJBAAAARHRSTlMAHUotv/j5vSw/9cvd3MrzPg/q4+rqDnXk+/NzucP3t873
          /cJ05Przcunj8en0y93cyz28/vu7K1RASpWb/YBAhvP3hpKCbb4AAAABYktHRGYs1NklAAAACXBI
          WXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH5wISBRAIBZcVZgAAAM1JREFUGNNjYMAHGJmYGNGEmFlc
          WNlc2DmQxTi5uHlc3Xj5+AUQYoJCwu4enl4e3iKiYnBBcQlJHw8PD18/fylpuKCMLFAoIDAoOERO
          Hi6ooOjuERoWHuERqaSAUKkMVBkV7REcg6RSRVUtFijsEeevroGwXVMrHiSYoK2DsJ1BQFdP38PD
          wJDfCNn1HMYmpqYmZuZoHrVITLTACBDLpCRLJK6VNRDY2CYn29qAWFZgQbsUIEhNBoJUEMsOLGhv
          BwQOjk5Ojs4glj0DCQAAJCUofMKIT9cAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDItMThUMDU6
          MTY6MDgrMDA6MDBXtcu8AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAyLTE4VDA1OjE2OjA4KzAw
          OjAwJuhzAAAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMi0xOFQwNToxNjowOCswMDowMHH9
          Ut8AAAAASUVORK5CYII="></image>
        </svg>
        <div class="wr_pressuretext">Pressure<br>1012 mbar</div>
    </div>
  </div>
  </div>
  </div>

    <!-- partial -->
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <script src="javascript/rain.js"></script>
<!-- partial:index.partial.html -->
<!-- ★ Move your mouse over the scene ★ -->
<script src="assets/js/three.min.js"></script> 

<div id="overlay-container">
</div>
<div id="scene-container">
</div>

<button1 id="btn-play">播放音乐</button1>
<div id="credits">
   
</div>

<script id="checkerboardPhong-vs" type="x-shader/x-vertex">
  
  varying vec2 vUv;
  varying vec3 Normal;
  varying vec3 Position;

  void main() {

    vUv = uv;
    Normal = normalize(normalMatrix * normal);
    Position = vec3(modelViewMatrix * vec4(position, 1.0));
    
    gl_Position = projectionMatrix * modelViewMatrix * vec4(position,1.0);

}
  
</script>

<script id="checkerboardPhong-fs" type="x-shader/x-fragment">
  
// Antialiased checkerboard - http://www.yaldex.com/open-gl/ch17lev1sec5.html
  
  varying vec2 vUv;
  varying vec3 Normal;
  varying vec3 Position;

  uniform vec3 Ka;
  uniform vec3 Kd;
  uniform vec3 Ks;
  uniform vec4 LightPosition;
  uniform vec3 LightIntensity;
  
  vec3 phong(vec3 col) {
    
    float Shininess = 100.0;
        
    vec3 n = normalize(Normal);
    vec3 s = normalize(vec3(LightPosition) - Position);
    vec3 v = normalize(vec3(-Position));
    vec3 r = reflect(-s, n);

    vec3 ambient = col;
    vec3 diffuse = Kd * max(dot(s, n), 0.0);
    vec3 specular = Ks * pow(max(dot(r, v), 0.0), Shininess);

    return LightIntensity * (ambient + diffuse + specular);
      
  }

  void main() {
    
    vec3 color;
    vec3 color1 = vec3(0.0, 0.0, 0.0);
    vec3 color2 = vec3(1.0, 1.0, 1.0);
    vec3 avgColor = vec3(0.8, 0.8, 0.8);
    float scale = 14.0;

    // Determine the width of the projection of one pixel into s-t space
    vec2 fw = fwidth(vUv);

    // Determine the amount of fuzziness
    vec2 fuzz = fw * scale * 1.125;

    float fuzzMax = max(fuzz.s, fuzz.t);

    // Determine the position in the checkerboard pattern
    vec2 checkPos = fract(vUv * scale);

    if (fuzzMax < 0.5) {
      
      // If the filter width is small enough, compute the pattern color
      vec2 p = smoothstep(vec2(0.5), fuzz + vec2(0.5), checkPos) + (1.0 - smoothstep(vec2(0.0), fuzz, checkPos));

      color = mix(color1, color2, p.x * p.y + (1.0 - p.x) * (1.0 - p.y));

      // Fade in the average color when we get close to the limit
      color = mix(color, avgColor, smoothstep(0.125, 0.5, fuzzMax));
      
    } else {
      
     // Otherwise, use only the average color
      color = avgColor;
    
    }

    gl_FragColor = vec4(phong(color), 1.);
   
  }
  
</script>

<script>
  
function roundEdgedBoxGeom(width, height, depth, radius0, smoothness) {
  
  let shape = new THREE.Shape();
  let eps = 0.00001;
  let radius = radius0 - eps;
  shape.absarc(eps, eps, eps, -Math.PI / 2, -Math.PI, true);
  shape.absarc(eps, height - radius * 2, eps, Math.PI, Math.PI / 2, true);
  shape.absarc(width - radius * 2, height - radius * 2, eps, Math.PI / 2, 0, true);
  shape.absarc(width - radius * 2, eps, eps, 0, -Math.PI / 2, true);
  
  let geometry = new THREE.ExtrudeBufferGeometry(shape, {
    
    depth: depth - radius0 * 2,
    bevelEnabled: true,
    bevelSegments: smoothness * 2,
    steps: 1,
    bevelSize: radius,
    bevelThickness: radius0,
    curveSegments: smoothness
    
  });

  geometry.center();

  return geometry;

}

</script>

<script>
  
function initMaterials() {
  
  const white = new THREE.MeshPhongMaterial({
    color: 0xffffff,
    // color: 0xffe9c9,
    shininess: 100,
    specular: 0x383636
  });
  
  const green = new THREE.MeshPhongMaterial({
    color: 0x6e9377,
    shininess: 100,
    specular: 0x383636
  });
  
  const chestnut = new THREE.MeshPhongMaterial({
    color: 0x6b1300,
    shininess: 100,
    specular: 0x383636
  });
  
  const pink = new THREE.MeshPhongMaterial({
    color: 0xff84bd,
    shininess: 100,
    specular: 0x383636
  });
  
  const peach = new THREE.MeshPhongMaterial({
    color: 0xff9977,
    shininess: 100,
    specular: 0x383636
  });
  
  const grey = new THREE.MeshPhongMaterial({
    color: 0x8e8e8e,
    shininess: 100,
    specular: 0x383636
  });
  
  const black = new THREE.MeshPhongMaterial({
    color: 0x000000,
    shininess: 100,
    specular: 0x383636
  });
  
  const peachStandard = new THREE.MeshStandardMaterial({
    color: 0x444444,
    emissive: 0xff586b,
    roughness: 0.0,
    metalness: 0.2
  });
  
  let uniforms = {
    
    Ka: { value: new THREE.Vector3(0.9, 0.9, 0.9) },
    Kd: { value: new THREE.Vector3(0.3, 0.0, 0.15) },
    Ks: { value: new THREE.Vector3(0.75, 0.75, 0.75) },
    LightIntensity: { value: new THREE.Vector4(0.75, 0.75, 0.75, 1.0) },
    LightPosition: { value: new THREE.Vector4(0, 10, -20, 1.0) },
  
  };
  
  const vertexShader = document.getElementById("checkerboardPhong-vs").text;
  const fragmentShader = document.getElementById("checkerboardPhong-fs").text;
  
  const checkerboardPhong = new THREE.ShaderMaterial({
      uniforms : uniforms,
      vertexShader : vertexShader,
      fragmentShader : fragmentShader,
      side: THREE.DoubleSide
  });
  
  return {
  
    white,
    peach,
    peachStandard,
    pink, 
    chestnut,
    green,
    grey,
    black,
    checkerboardPhong
    
  }
  
}
  
</script>

<script>


// UTILS FUNCTIONS
  
function monkeyPatch(shader, { defines = '', header = '', main = '', ...replaces }) {
  let patchedShader = shader

  const replaceAll = (str, find, rep) => str.split(find).join(rep)
  Object.keys(replaces).forEach((key) => {
    patchedShader = replaceAll(patchedShader, key, replaces[key])
  })

  patchedShader = patchedShader.replace(
    'void main() {',
    `
    ${header}
    void main() {
      ${main}
    `
  )

  return `
    ${defines}
    ${patchedShader}
  `
}

// from https://github.com/hughsk/glsl-noise/blob/master/simplex/3d.glsl
function noise() {
  return `
    //
    // Description : Array and textureless GLSL 2D/3D/4D simplex
    //               noise functions.
    //      Author : Ian McEwan, Ashima Arts.
    //  Maintainer : ijm
    //     Lastmod : 20110822 (ijm)
    //     License : Copyright (C) 2011 Ashima Arts. All rights reserved.
    //               Distributed under the MIT License. See LICENSE file.
    //               https://github.com/ashima/webgl-noise
    //

    vec3 mod289(vec3 x) {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
    }

    vec4 mod289(vec4 x) {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
    }

    vec4 permute(vec4 x) {
         return mod289(((x*34.0)+1.0)*x);
    }

    vec4 taylorInvSqrt(vec4 r)
    {
      return 1.79284291400159 - 0.85373472095314 * r;
    }

    float noise(vec3 v)
      {
      const vec2  C = vec2(1.0/6.0, 1.0/3.0) ;
      const vec4  D = vec4(0.0, 0.5, 1.0, 2.0);

    // First corner
      vec3 i  = floor(v + dot(v, C.yyy) );
      vec3 x0 =   v - i + dot(i, C.xxx) ;

    // Other corners
      vec3 g = step(x0.yzx, x0.xyz);
      vec3 l = 1.0 - g;
      vec3 i1 = min( g.xyz, l.zxy );
      vec3 i2 = max( g.xyz, l.zxy );

      //   x0 = x0 - 0.0 + 0.0 * C.xxx;
      //   x1 = x0 - i1  + 1.0 * C.xxx;
      //   x2 = x0 - i2  + 2.0 * C.xxx;
      //   x3 = x0 - 1.0 + 3.0 * C.xxx;
      vec3 x1 = x0 - i1 + C.xxx;
      vec3 x2 = x0 - i2 + C.yyy; // 2.0*C.x = 1/3 = C.y
      vec3 x3 = x0 - D.yyy;      // -1.0+3.0*C.x = -0.5 = -D.y

    // Permutations
      i = mod289(i);
      vec4 p = permute( permute( permute(
                 i.z + vec4(0.0, i1.z, i2.z, 1.0 ))
               + i.y + vec4(0.0, i1.y, i2.y, 1.0 ))
               + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));

    // Gradients: 7x7 points over a square, mapped onto an octahedron.
    // The ring size 17*17 = 289 is close to a multiple of 49 (49*6 = 294)
      float n_ = 0.142857142857; // 1.0/7.0
      vec3  ns = n_ * D.wyz - D.xzx;

      vec4 j = p - 49.0 * floor(p * ns.z * ns.z);  //  mod(p,7*7)

      vec4 x_ = floor(j * ns.z);
      vec4 y_ = floor(j - 7.0 * x_ );    // mod(j,N)

      vec4 x = x_ *ns.x + ns.yyyy;
      vec4 y = y_ *ns.x + ns.yyyy;
      vec4 h = 1.0 - abs(x) - abs(y);

      vec4 b0 = vec4( x.xy, y.xy );
      vec4 b1 = vec4( x.zw, y.zw );

      //vec4 s0 = vec4(lessThan(b0,0.0))*2.0 - 1.0;
      //vec4 s1 = vec4(lessThan(b1,0.0))*2.0 - 1.0;
      vec4 s0 = floor(b0)*2.0 + 1.0;
      vec4 s1 = floor(b1)*2.0 + 1.0;
      vec4 sh = -step(h, vec4(0.0));

      vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;
      vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;

      vec3 p0 = vec3(a0.xy,h.x);
      vec3 p1 = vec3(a0.zw,h.y);
      vec3 p2 = vec3(a1.xy,h.z);
      vec3 p3 = vec3(a1.zw,h.w);

    //Normalise gradients
      vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));
      p0 *= norm.x;
      p1 *= norm.y;
      p2 *= norm.z;
      p3 *= norm.w;

    // Mix final noise value
      vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);
      m = m * m;
      return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1),
                                    dot(p2,x2), dot(p3,x3) ) );
      }

  `
}
  
  
  
</script>

<script>
  
function getExportedPoints() {
  
  let wavyFramePoints = [
    [2.1892566680908203, 5.229923725128174, 0.0] ,
[2.237551212310791, 5.168440341949463, 0.0] ,
[2.27828311920166, 5.106956958770752, 0.0] ,
[2.3092093467712402, 5.045472621917725, 0.0] ,
[2.3286285400390625, 4.983988285064697, 0.0] ,
[2.335470676422119, 4.922504901885986, 0.0] ,
[2.329359531402588, 4.861020565032959, 0.0] ,
[2.31063175201416, 4.799536228179932, 0.0] ,
[2.2803173065185547, 4.738052845001221, 0.0] ,
[2.240086555480957, 4.67656946182251, 0.0] ,
[2.192152976989746, 4.615085124969482, 0.0] ,
[2.1391563415527344, 4.553600788116455, 0.0] ,
[2.0840139389038086, 4.492117404937744, 0.0] ,
[2.029761791229248, 4.430634021759033, 0.0] ,
[1.9793866872787476, 4.369149684906006, 0.0] ,
[1.9356614351272583, 4.3076653480529785, 0.0] ,
[1.9009937047958374, 4.246181964874268, 0.0] ,
[1.8772917985916138, 4.184698581695557, 0.0] ,
[1.8658610582351685, 4.123214244842529, 0.0] ,
[1.8673301935195923, 4.061729907989502, 0.0] ,
[1.881618618965149, 4.000246524810791, 0.0] ,
[1.9079395532608032, 3.9387621879577637, 0.0] ,
[1.944844365119934, 3.8772788047790527, 0.0] ,
[1.9903007745742798, 3.8157944679260254, 0.0] ,
[2.041806221008301, 3.7543110847473145, 0.0] ,
[2.0965256690979004, 3.692826747894287, 0.0] ,
[2.15144681930542, 3.631343364715576, 0.0] ,
[2.203545570373535, 3.569859027862549, 0.0] ,
[2.249953269958496, 3.508375644683838, 0.0] ,
[2.288115978240967, 3.4468913078308105, 0.0] ,
[2.315932273864746, 3.385406970977783, 0.0] ,
[2.3318710327148438, 3.3239235877990723, 0.0] ,
[2.3350539207458496, 3.2624402046203613, 0.0] ,
[2.3253068923950195, 3.200955867767334, 0.0] ,
[2.303165912628174, 3.1394715309143066, 0.0] ,
[2.2698497772216797, 3.0779881477355957, 0.0] ,
[2.2271933555603027, 3.0165038108825684, 0.0] ,
[2.177544116973877, 2.9550204277038574, 0.0] ,
[2.123635768890381, 2.89353609085083, 0.0] ,
[2.068436622619629, 2.832052707672119, 0.0] ,
[2.0149850845336914, 2.770569324493408, 0.0] ,
[1.9662235975265503, 2.709084987640381, 0.0] ,
[1.9248372316360474, 2.6476006507873535, 0.0] ,
[1.8931039571762085, 2.5861172676086426, 0.0] ,
[1.8727713823318481, 2.5246329307556152, 0.0] ,
[1.8649581670761108, 2.4631495475769043, 0.0] ,
[1.870094895362854, 2.401665210723877, 0.0] ,
[1.887898564338684, 2.3401808738708496, 0.0] ,
[1.9173892736434937, 2.2786974906921387, 0.0] ,
[1.956943392753601, 2.2172141075134277, 0.0] ,
[2.004383087158203, 2.1557297706604004, 0.0] ,
[2.0570969581604004, 2.0942463874816895, 0.0] ,
[2.1121826171875, 2.0327625274658203, 0.0] ,
[2.1666078567504883, 1.9712786674499512, 0.0] ,
[2.217376232147217, 1.909794807434082, 0.0] ,
[2.261692523956299, 1.848310947418213, 0.0] ,
[2.297116756439209, 1.7868270874023438, 0.0] ,
[2.321699619293213, 1.7253432273864746, 0.0] ,
[2.334087371826172, 1.6638593673706055, 0.0] ,
[2.333597183227539, 1.6023755073547363, 0.0] ,
[2.3202571868896484, 1.5408916473388672, 0.0] ,
[2.2948012351989746, 1.479407787322998, 0.0] ,
[2.2586312294006348, 1.417923927307129, 0.0] ,
[2.213737964630127, 1.3564400672912598, 0.0] ,
[2.1625924110412598, 1.2949562072753906, 0.0] ,
[2.1080117225646973, 1.2334718704223633, 0.0] ,
[2.052999496459961, 1.1719884872436523, 0.0] ,
[2.0005850791931152, 1.110504150390625, 0.0] ,
[1.9536539316177368, 1.0490202903747559, 0.0] ,
[1.9147895574569702, 0.9875364303588867, 0.0] ,
[1.8861318826675415, 0.9260525703430176, 0.0] ,
[1.8692578077316284, 0.8645687103271484, 0.0] ,
[1.865097165107727, 0.8030848503112793, 0.0] ,
[1.8738785982131958, 0.7416009902954102, 0.0] ,
[1.895119309425354, 0.680117130279541, 0.0] ,
[1.927648663520813, 0.6186332702636719, 0.0] ,
[1.9696770906448364, 0.5571494102478027, 0.0] ,
[2.018889904022217, 0.4956655502319336, 0.0] ,
[2.0725784301757812, 0.43418169021606445, 0.0] ,
[2.127786159515381, 0.3726978302001953, 0.0] ,
[2.1814746856689453, 0.31121397018432617, 0.0] ,
[2.2306876182556152, 0.24973011016845703, 0.0] ,
[2.2727155685424805, 0.1882462501525879, 0.0] ,
[2.3052453994750977, 0.12676191329956055, 0.0] ,
[2.3264856338500977, 0.0652780532836914, 0.0] ,
[2.3352675437927246, 0.0037941932678222656, 0.0] ,
[2.331106662750244, -0.057689666748046875, 0.0] ,
[2.31423282623291, -0.11917352676391602, 0.0] ,
[2.2855749130249023, -0.18065738677978516, 0.0] ,
[2.2467103004455566, -0.2421412467956543, 0.0] ,
[2.1997790336608887, -0.30362510681152344, 0.0] ,
[2.147364616394043, -0.3651089668273926, 0.0] ,
[2.0923523902893066, -0.4265928268432617, 0.0] ,
[2.037771701812744, -0.48807668685913086, 0.0] ,
[1.9866267442703247, -0.549560546875, 0.0] ,
[1.941733479499817, -0.6110444068908691, 0.0] ,
[1.9055629968643188, -0.6725282669067383, 0.0] ,
[1.880107045173645, -0.7340121269226074, 0.0] ,
[1.8667670488357544, -0.7954959869384766, 0.0] ,
[1.8662773370742798, -0.8569803237915039, 0.0] ,
[1.8786646127700806, -0.918464183807373, 0.0] ,
[1.9032474756240845, -0.9799480438232422, 0.0] ,
[1.9386721849441528, -1.0414314270019531, 0.0] ,
[1.9829884767532349, -1.1029157638549805, 0.0] ,
[2.0337562561035156, -1.1643996238708496, 0.0] ,
[2.088181972503662, -1.2258834838867188, 0.0] ,
[2.1432671546936035, -1.287367343902588, 0.0] ,
[2.195981502532959, -1.348851203918457, 0.0] ,
[2.2434210777282715, -1.4103350639343262, 0.0] ,
[2.282975196838379, -1.4718189239501953, 0.0] ,
[2.3124656677246094, -1.5333027839660645, 0.0] ,
[2.3302693367004395, -1.5947866439819336, 0.0] ,
[2.3354063034057617, -1.6562705039978027, 0.0] ,
[2.3275928497314453, -1.71775484085083, 0.0] ,
[2.307260036468506, -1.779238224029541, 0.0] ,
[2.275527000427246, -1.8407220840454102, 0.0] ,
[2.234140396118164, -1.9022059440612793, 0.0] ,
[2.1853795051574707, -1.9636898040771484, 0.0] ,
[2.131927490234375, -2.025174140930176, 0.0] ,
[2.076728343963623, -2.086658000946045, 0.0] ,
[2.022819995880127, -2.148141860961914, 0.0] ,
[1.9731711149215698, -2.209625720977783, 0.0] ,
[1.9305142164230347, -2.2711095809936523, 0.0] ,
[1.8971983194351196, -2.3325934410095215, 0.0] ,
[1.875057339668274, -2.3940773010253906, 0.0] ,
[1.8653103113174438, -2.4555611610412598, 0.0] ,
[1.868493676185608, -2.517045021057129, 0.0] ,
[1.8844319581985474, -2.578528881072998, 0.0] ,
[1.9122482538223267, -2.6400132179260254, 0.0] ,
[1.9504109621047974, -2.7014970779418945, 0.0] ,
[1.9968191385269165, -2.7629809379577637, 0.0] ,
[2.048917770385742, -2.8244643211364746, 0.0] ,
[2.1038384437561035, -2.8859481811523438, 0.0] ,
[2.158557891845703, -2.947432518005371, 0.0] ,
[2.210063934326172, -3.0089163780212402, 0.0] ,
[2.2555203437805176, -3.0704002380371094, 0.0] ,
[2.2924251556396484, -3.1318840980529785, 0.0] ,
[2.3187460899353027, -3.1933679580688477, 0.0] ,
[2.3330345153808594, -3.254851818084717, 0.0] ,
[2.334503650665283, -3.316335678100586, 0.0] ,
[2.3230724334716797, -3.3778200149536133, 0.0] ,
[2.299370765686035, -3.439303398132324, 0.0] ,
[2.264702796936035, -3.5007872581481934, 0.0] ,
[2.220977783203125, -3.5622711181640625, 0.0] ,
[2.170602321624756, -3.62375545501709, 0.0] ,
[2.1163501739501953, -3.685239315032959, 0.0] ,
[2.0612082481384277, -3.746723175048828, 0.0] ,
[2.008211135864258, -3.808206558227539, 0.0] ,
[1.9602779150009155, -3.869690418243408, 0.0] ,
[1.9200466871261597, -3.9311742782592773, 0.0] ,
[1.8897329568862915, -3.9926581382751465, 0.0] ,
[1.8710047006607056, -4.054141998291016, 0.0] ,
[1.8648935556411743, -4.115625858306885, 0.0] ,
[1.87173593044281, -4.177109718322754, 0.0] ,
[1.8911548852920532, -4.238593578338623, 0.0] ,
[1.9220815896987915, -4.300077438354492, 0.0] ,
[1.9628132581710815, -4.3615617752075195, 0.0] ,
[2.0111074447631836, -4.423045635223389, 0.0] ,
[2.0643057823181152, -4.4845290184021, 0.0] ,
[2.119478702545166, -4.546012878417969, 0.0] ,
[2.1735897064208984, -4.607496738433838, 0.0] ,
[2.2236595153808594, -4.668980598449707, 0.0] ,
[2.2669315338134766, -4.730464935302734, 0.0] ,
[2.301023483276367, -4.7919487953186035, 0.0] ,
[2.3240580558776855, -4.853432655334473, 0.0] ,
[2.3347678184509277, -4.914916515350342, 0.0] ,
[2.3325629234313965, -4.976399898529053, 0.0] ,
[2.3175644874572754, -5.03788423538208, 0.0] ,
[2.2905988693237305, -5.099368095397949, 0.0] ,
[2.25314998626709, -5.160851955413818, 0.0] ,
[2.207279682159424, -5.2223358154296875, 0.0] ,
[2.155513286590576, -5.283819675445557, 0.0] ,
[-2.042383909225464, -5.283820152282715, 0.0] ,
[-2.1676294803619385, -5.260290145874023, 0.0] ,
[-2.219395637512207, -5.198806285858154, 0.0] ,
[-2.265265941619873, -5.137322425842285, 0.0] ,
[-2.3027148246765137, -5.075838565826416, 0.0] ,
[-2.3296806812286377, -5.014354705810547, 0.0] ,
[-2.3446788787841797, -4.9528703689575195, 0.0] ,
[-2.346883773803711, -4.891386985778809, 0.0] ,
[-2.3361740112304688, -4.8299031257629395, 0.0] ,
[-2.3131394386291504, -4.76841926574707, 0.0] ,
[-2.2790474891662598, -4.706935405731201, 0.0] ,
[-2.2357754707336426, -4.645451545715332, 0.0] ,
[-2.1857059001922607, -4.583967208862305, 0.0] ,
[-2.1315948963165283, -4.5224833488464355, 0.0] ,
[-2.0764217376708984, -4.460999488830566, 0.0] ,
[-2.023223400115967, -4.3995161056518555, 0.0] ,
[-1.9749292135238647, -4.338032245635986, 0.0] ,
[-1.9341976642608643, -4.276547908782959, 0.0] ,
[-1.9032707214355469, -4.21506404876709, 0.0] ,
[-1.8838518857955933, -4.153580188751221, 0.0] ,
[-1.8770097494125366, -4.092096328735352, 0.0] ,
[-1.8831208944320679, -4.030612468719482, 0.0] ,
[-1.9018491506576538, -3.9691286087036133, 0.0] ,
[-1.932162880897522, -3.907644748687744, 0.0] ,
[-1.9723941087722778, -3.846160888671875, 0.0] ,
[-2.020327091217041, -3.784677028656006, 0.0] ,
[-2.073324203491211, -3.723193645477295, 0.0] ,
[-2.1284661293029785, -3.661709785461426, 0.0] ,
[-2.182718515396118, -3.6002259254455566, 0.0] ,
[-2.2330939769744873, -3.5387415885925293, 0.0] ,
[-2.2768189907073975, -3.47725772857666, 0.0] ,
[-2.3114869594573975, -3.415773868560791, 0.0] ,
[-2.335188627243042, -3.35429048538208, 0.0] ,
[-2.3466196060180664, -3.2928061485290527, 0.0] ,
[-2.3451504707336426, -3.2313222885131836, 0.0] ,
[-2.330862045288086, -3.1698384284973145, 0.0] ,
[-2.3045411109924316, -3.1083545684814453, 0.0] ,
[-2.267636299133301, -3.046870708465576, 0.0] ,
[-2.222179889678955, -2.985386848449707, 0.0] ,
[-2.1706740856170654, -2.923902988433838, 0.0] ,
[-2.1159543991088867, -2.8624186515808105, 0.0] ,
[-2.0610337257385254, -2.8009347915649414, 0.0] ,
[-2.0089354515075684, -2.7394514083862305, 0.0] ,
[-1.9625272750854492, -2.6779675483703613, 0.0] ,
[-1.9243645668029785, -2.616483688354492, 0.0] ,
[-1.8965482711791992, -2.554999351501465, 0.0] ,
[-1.8806097507476807, -2.4935154914855957, 0.0] ,
[-1.8774263858795166, -2.4320316314697266, 0.0] ,
[-1.8871736526489258, -2.3705477714538574, 0.0] ,
[-1.9093146324157715, -2.3090639114379883, 0.0] ,
[-1.942630410194397, -2.2475805282592773, 0.0] ,
[-1.9852873086929321, -2.18609619140625, 0.0] ,
[-2.0349366664886475, -2.124612331390381, 0.0] ,
[-2.0888447761535645, -2.0631284713745117, 0.0] ,
[-2.1440441608428955, -2.0016446113586426, 0.0] ,
[-2.197495937347412, -1.9401607513427734, 0.0] ,
[-2.2462570667266846, -1.8786768913269043, 0.0] ,
[-2.2876434326171875, -1.8171930313110352, 0.0] ,
[-2.3193767070770264, -1.7557086944580078, 0.0] ,
[-2.339709520339966, -1.6942253112792969, 0.0] ,
[-2.347522735595703, -1.6327414512634277, 0.0] ,
[-2.342386245727539, -1.5712575912475586, 0.0] ,
[-2.32458233833313, -1.5097737312316895, 0.0] ,
[-2.2950916290283203, -1.4482898712158203, 0.0] ,
[-2.255537748336792, -1.3868060111999512, 0.0] ,
[-2.2080979347229004, -1.325322151184082, 0.0] ,
[-2.155383825302124, -1.2638378143310547, 0.0] ,
[-2.1002984046936035, -1.2023544311523438, 0.0] ,
[-2.045872926712036, -1.1408700942993164, 0.0] ,
[-1.9951049089431763, -1.0793862342834473, 0.0] ,
[-1.9507886171340942, -1.0179023742675781, 0.0] ,
[-1.9153640270233154, -0.956418514251709, 0.0] ,
[-1.8907811641693115, -0.8949346542358398, 0.0] ,
[-1.8783937692642212, -0.8334507942199707, 0.0] ,
[-1.8788834810256958, -0.7719669342041016, 0.0] ,
[-1.892223596572876, -0.7104830741882324, 0.0] ,
[-1.9176793098449707, -0.6489992141723633, 0.0] ,
[-1.9538497924804688, -0.5875153541564941, 0.0] ,
[-1.9987431764602661, -0.526031494140625, 0.0] ,
[-2.0498881340026855, -0.46454763412475586, 0.0] ,
[-2.1044692993164062, -0.4030637741088867, 0.0] ,
[-2.1594812870025635, -0.3415799140930176, 0.0] ,
[-2.211895704269409, -0.28009605407714844, 0.0] ,
[-2.258826732635498, -0.2186121940612793, 0.0] ,
[-2.2976913452148438, -0.15712833404541016, 0.0] ,
[-2.3263494968414307, -0.09564447402954102, 0.0] ,
[-2.3432230949401855, -0.03416013717651367, 0.0] ,
[-2.347383975982666, 0.02732372283935547, 0.0] ,
[-2.3386025428771973, 0.08880758285522461, 0.0] ,
[-2.317362070083618, 0.15029144287109375, 0.0] ,
[-2.284832239151001, 0.2117753028869629, 0.0] ,
[-2.2428042888641357, 0.27325916290283203, 0.0] ,
[-2.1935908794403076, 0.33474302291870117, 0.0] ,
[-2.1399028301239014, 0.3962268829345703, 0.0] ,
[-2.0846948623657227, 0.45771074295043945, 0.0] ,
[-2.031006336212158, 0.5191946029663086, 0.0] ,
[-1.9817934036254883, 0.5806784629821777, 0.0] ,
[-1.9397650957107544, 0.6421623229980469, 0.0] ,
[-1.9072356224060059, 0.703646183013916, 0.0] ,
[-1.8859951496124268, 0.7651300430297852, 0.0] ,
[-1.8772135972976685, 0.8266143798828125, 0.0] ,
[-1.8813742399215698, 0.8880977630615234, 0.0] ,
[-1.8982481956481934, 0.9495820999145508, 0.0] ,
[-1.9269059896469116, 1.0110654830932617, 0.0] ,
[-1.9657704830169678, 1.072549819946289, 0.0] ,
[-2.0127017498016357, 1.134033203125, 0.0] ,
[-2.0651161670684814, 1.1955175399780273, 0.0] ,
[-2.1201281547546387, 1.2570013999938965, 0.0] ,
[-2.1747090816497803, 1.3184852600097656, 0.0] ,
[-2.2258543968200684, 1.3799691200256348, 0.0] ,
[-2.270747661590576, 1.441452980041504, 0.0] ,
[-2.306917905807495, 1.502936840057373, 0.0] ,
[-2.332373857498169, 1.5644207000732422, 0.0] ,
[-2.3457138538360596, 1.6259045600891113, 0.0] ,
[-2.346203565597534, 1.6873884201049805, 0.0] ,
[-2.3338160514831543, 1.7488722801208496, 0.0] ,
[-2.3092334270477295, 1.8103561401367188, 0.0] ,
[-2.2738089561462402, 1.871840000152588, 0.0] ,
[-2.229492664337158, 1.933323860168457, 0.0] ,
[-2.178724527359009, 1.9948081970214844, 0.0] ,
[-2.1242992877960205, 2.0562915802001953, 0.0] ,
[-2.069213390350342, 2.1177759170532227, 0.0] ,
[-2.0164997577667236, 2.1792588233947754, 0.0] ,
[-1.9690600633621216, 2.2407431602478027, 0.0] ,
[-1.9295059442520142, 2.3022265434265137, 0.0] ,
[-1.9000153541564941, 2.363710880279541, 0.0] ,
[-1.882211446762085, 2.4251952171325684, 0.0] ,
[-1.8770748376846313, 2.4866786003112793, 0.0] ,
[-1.884887933731079, 2.5481629371643066, 0.0] ,
[-1.905220627784729, 2.6096463203430176, 0.0] ,
[-1.9369540214538574, 2.671130657196045, 0.0] ,
[-1.9783402681350708, 2.732614040374756, 0.0] ,
[-2.027101993560791, 2.794098377227783, 0.0] ,
[-2.0805537700653076, 2.855581760406494, 0.0] ,
[-2.1357526779174805, 2.9170660972595215, 0.0] ,
[-2.1896612644195557, 2.9785494804382324, 0.0] ,
[-2.2393102645874023, 3.0400338172912598, 0.0] ,
[-2.2819669246673584, 3.1015172004699707, 0.0] ,
[-2.3152830600738525, 3.163001537322998, 0.0] ,
[-2.3374240398406982, 3.2244858741760254, 0.0] ,
[-2.3471710681915283, 3.2859692573547363, 0.0] ,
[-2.3439877033233643, 3.3474535942077637, 0.0] ,
[-2.328049421310425, 3.4089369773864746, 0.0] ,
[-2.3002331256866455, 3.470421314239502, 0.0] ,
[-2.262070417404175, 3.531904697418213, 0.0] ,
[-2.2156622409820557, 3.5933890342712402, 0.0] ,
[-2.1635637283325195, 3.654872417449951, 0.0] ,
[-2.108642816543579, 3.7163567543029785, 0.0] ,
[-2.0539233684539795, 3.7778401374816895, 0.0] ,
[-2.0024173259735107, 3.839324474334717, 0.0] ,
[-1.956960916519165, 3.9008078575134277, 0.0] ,
[-1.9200562238693237, 3.962292194366455, 0.0] ,
[-1.8937352895736694, 4.023775577545166, 0.0] ,
[-1.8794469833374023, 4.085259914398193, 0.0] ,
[-1.8779778480529785, 4.146744251251221, 0.0] ,
[-1.889408826828003, 4.208227634429932, 0.0] ,
[-1.913110613822937, 4.269711017608643, 0.0] ,
[-1.9477784633636475, 4.33119535446167, 0.0] ,
[-1.9915035963058472, 4.392679691314697, 0.0] ,
[-2.0418789386749268, 4.454163074493408, 0.0] ,
[-2.0961310863494873, 4.515646457672119, 0.0] ,
[-2.151273488998413, 4.5771307945251465, 0.0] ,
[-2.204270124435425, 4.638615131378174, 0.0] ,
[-2.2522034645080566, 4.700098514556885, 0.0] ,
[-2.2924344539642334, 4.761581897735596, 0.0] ,
[-2.3227486610412598, 4.823066234588623, 0.0] ,
[-2.3414766788482666, 4.88455057144165, 0.0] ,
[-2.347587823867798, 4.946033954620361, 0.0] ,
[-2.340745687484741, 5.007518291473389, 0.0] ,
[-2.321326494216919, 5.069002628326416, 0.0] ,
[-2.2904000282287598, 5.130486011505127, 0.0] ,
[-2.2496681213378906, 5.191969394683838, 0.0] ,
[-2.201373815536499, 5.253453731536865, 0.0] ,
[2.0046591758728027, 5.253453731536865, 0.0] ,
[2.121809959411621, 5.253453731536865, 0.0]
  ];
  
  let sculpturePoints = [[-1.3917511701583862, -3.1171324253082275, -3.5898947715759277] ,
[-1.1922402381896973, -1.0718055963516235, -1.2966901063919067] ,
[-0.5807932615280151, -2.7513058185577393, -5.373478412628174] ,
[1.267488718032837, -1.851090431213379, -5.381288528442383] ,
[0.1931348294019699, -0.9099960327148438, -2.8085756301879883] ,
[-2.5284719467163086, 3.285818763743009e-07, -2.445554733276367] ,
[-1.2505677938461304, 7.523778435825079e-07, -5.599764347076416] ,
[1.1724963188171387, 0.4350929856300354, -5.8608903884887695] ,
[3.412280321121216, 1.0782206058502197, -0.681460440158844] ,
[1.6286853551864624, 0.8923431634902954, 0.35091060400009155] ,
[0.6678873300552368, -0.8118454217910767, -1.3810076713562012] ,
[1.842307686805725, -0.8831179141998291, -5.522668838500977] ,
[4.667878150939941, 5.6755050081847e-07, -4.22413969039917] ,
[5.608157157897949, 1.0994219779968262, -1.510213851928711] ,
[4.6876091957092285, 0.2738717496395111, -0.9849551916122437] ,
[1.5655218362808228, 2.703272819519043, -0.9420212507247925] ,
[1.0088565349578857, 0.2771475315093994, -2.3343098163604736] ,
[2.886371612548828, -0.46153825521469116, -2.5627846717834473] ,
[4.184347152709961, -0.587138295173645, -2.874530553817749]];
  
  return {
    
    wavyFramePoints,
    sculpturePoints
    
  }
  
}
</script>
<!-- partial -->
  <script src='assets/js/Reflector.js'></script>
<script src='assets/js/BufferGeometryUtils.js'></script><script src="assets/js/script.js"></script>

</body>

</html>
