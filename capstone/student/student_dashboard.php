<!DOCTYPE html>
<html>
<head>
    {% load static %}
    <title>iPHS Careers</title>
    <link rel="icon" href="{% static '/pictures/phs-logo.png'%}" type="image/x-icon"/>
    <!-- CSS-->
    <link rel="stylesheet" href="{% static 'style.css' %}?v=1.0">
    <!-- Font Awesome links -->
    <link href="{% static 'fontawesomefree/css/fontawesome.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'fontawesomefree/css/brands.css' %}" rel="stylesheet" type="text/css">
    <link href="{% static 'fontawesomefree/css/solid.css' %}" rel="stylesheet" type="text/css"> 

</head>
<style>
    /* logout red color naglalaban code sa css file kaya d2 ko na lang nilagat=y*/
    #logout {
        color: #ff1a1a;
    }
    #myClosebtn:hover,#logout:hover {
        color: #a91010; /* Darker shade of red */
    }
    
    .hamburger-menu .hamburger:hover {
            color:  #4001FF;
        }

</style>
<body>
    
    <nav>
        <header>
            <div class="logo">
                <a href="{% url 'dashboard' %}">
                    <img src="{% static '/pictures/phs_logo.png'%}" alt="phs logo">
                </a> 
            </div>
            <div class="hamburger-menu">
                <span class="hamburger" onclick="openNav()">&#9776;</span>
            </div>
            <div class="right-side_nav">
            <div class="name"><em>{{ user.fname }} {{ user.lname }} </em></div>
            <div class="profile_img">
                <img src="{% static '/pictures/id_pic-sample.png'%}" alt="Profile Picture"> <!-- Sample lang 4 static pede alisin -->
            </div>
        </div>
        </header>

        <!-- The sidebar -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" id="myClosebtn"class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark"></i></a>
            <a href="{% url 'dashboard' %}"><i class="fa-solid fa-table-columns"></i> Dashboard</a>
            <a href="{% url 'profile' %}"><i class="fa-solid fa-user"></i> Profile</a>
            <a href="{% url 'modules' %}"><i class="fa-solid fa-chart-simple"></i> Skills and Assessment Modules</a>
            <a href="{% url 'univexplore' %}"><i class="fa-solid fa-book"></i> University Explore</a>
            <a href="{% url 'feedback' %}"><i class="fa-solid fa-message"></i> Feedback</a>
            <a href="{% url 'home' %}" id="logout"><i class="fa-solid fa-right-from-bracket" ></i> Log out</a>
        </div>
    </nav>
    <script src="{% static 'script.js' %}"></script>
    
    <div>
        
<div class="dashboard_container">
        <!-- Top part of the dashboard -->
        <div class="top-part">

            <div class="container-top-left">
                <a href="{% url 'modules' %}">
                    <i class="fa fa-pencil"></i>
                    <h3>Take Career Quiz</h3>
                </a>
            </div>

            <div class="column-top-right">
                <a class="remove-deco" href="{% url 'profile' %}">
                     <div class="name-date-time">
                    <h5>{{ current_date|date:"F d, Y" }}</h5>
                    <h2 class="wb">Welcome Back,</h2>
                    <h2 class="user_name"><em>{{ user.lname }}, {{ user.fname }}</em></h2>
                </a>
                </div>
            </div>    
        </div>
        
        <!-- Bottom part of the dashboard -->
        <div class="bottom-part">
            <!-- left -->
            <div class="column-bottom-left">
                 <!-- lagyan ng laman waiting sa feych data-->
                 <!-- graph dapat d2  -->
                 SAMPLE
            </div>
            <!-- right -->
            <div class="column-bottom-right">
                <div class="table_container">
                    <table>
                        <thead>
                            <tr>
                                <th>Sample</th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.  School Bukul</td>
                            </tr>
                            <tr>
                                <td>2.  DHVSU</td>
                           
                            </tr>
                            <tr>
                                <td>3.  Uni</td>
                            </tr>
                            <tr>
                                <td>4.  Versi</td>
                            </tr> 
                            <tr>
                                <td>5.  thank you</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            <!-- lagyan ng laman -->
            </div>
        </div>
    </div>
    </div>
</body>
</html>
