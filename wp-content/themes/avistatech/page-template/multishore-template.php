<?php



/**

 * Template Name: Multishore

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that

 * other "pages" on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

get_header(); 

?>



<section class="banner">

  <div class="main-tb-banner" id="demo">

    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="tab-banner-content">
          <?php
            $multishore_banner = get_field( 'multishore_banner' );
         ?>
          <img src="<?=esc_url( $multishore_banner['url']);?>" alt="Digital Transformation" class="d-block w-100">

          <div class="carousel-caption  d-md-block">

            <?=get_field("multishore_banner_text");?>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="Multishore_view m_t_150">

  <div class="container">

    <div class="row">

      <div class="col-lg-12 col-sm-12 col-md-12 col-">

        <div class="section_title text-center">

          <?=get_field("multishore_section_two_title");?>

        </div>

      </div>

    </div>

    <div class="row normal_pargraph">

      <div class="col-lg-6 col-sm-6 col-md-6 col-">

        <?=get_field("multishore_section_two_descripton");?>

      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-">

        <div class="common-form row">

          <h3>Fill out the details below, one of our experts will get in touch with you.</h3>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <input type="text" class="form-control" placeholder="First Name" name="email">

          </div>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <input type="password" class="form-control" placeholder="Last Name" name="pswd">

          </div>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <input type="text" class="form-control" placeholder="Enter email" name="email">

          </div>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <input type="password" class="form-control" placeholder="Enter password" name="pswd">

          </div>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <select class="form-select">

              <option>Job Type</option>

              <option>Contract</option>

              <option>Contract to Hire</option>

              <option>Permanent Role</option>

            </select>

          </div>

          <div class="col-lg-6 col-sm-6 col-md-6 col-">

            <select class="form-select">

              <option>Preferred Location</option>

              <option>USA</option>

              <option>Canada</option>

              <option>Argentina</option>
              <option>Mexico</option>
              <option>India</option>

            </select>

          </div>

          <div class="col-lg-12 col-">

            <select class="form-select">

              <option>Tech Stack</option>

              <option>Javascript</option>
              <option>Front-end</option>
              <option>Back-end Programming Languages</option>
              <option>Back-end Framework</option>
              <option>Big Data</option>
              <option>Cloud Technologies</option>
              <option>Packaged Suites</option>
              <option>Any Other</option>

            </select>

          </div>

          <div class="col-lg-12 col-">

            <select class="form-select">

              <option>Select Role</option>

              <option>Operational Support</option>

              <option>Developer</option>

              <option>Architech</option>
              <option>Analyst</option>
              <option>Project Manager</option>

            </select>

          </div>

          <div class="col-lg-12 col-">

            <span class="contact_lable"> Contact Via </span>

            <span class="contact_viaone">

              <input type="radio" id="test1" name="radio-group" checked>

              <label for="test1">Email</label>

            </span>

            <span>

              <input type="radio" id="test2" name="radio-group">

              <label for="test2">Mobile</label>

            </span>

          </div>

          <div class="col-lg-6 col-lg-6 col-sm-6 col-md-6 col-">

            <button class="btn get_touch " type="button">Submit</button>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>



<?php get_footer(); ?>