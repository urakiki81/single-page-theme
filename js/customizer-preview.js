( function( $ ) {
    wp.customize( 'cp_name_text', function( value ) {
      value.bind( function( newval ) {
        $( '.logo a' ).html( newval );
      } );
    } );
    wp.customize( 'Main_HL_text', function( value ) {
        value.bind( function( newval ) {
          $( '#header h1' ).html( newval );
        } );
      } );
      wp.customize( 'Sc_HL_text', function( value ) {
        value.bind( function( newval ) {
          $( '#header p' ).html( newval );
        } );
      } );
      wp.customize( 'side_text', function( value ) {
        value.bind( function( newval ) {
          $( '#side span' ).html( newval );
        } );
      } );
      wp.customize( 'bb_one_title', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-one h6' ).html( newval );
        } );
      } );
      wp.customize( 'bb_one_d', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-one p' ).html( newval );
        } );
      } );
      wp.customize( 'bb_two_title', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-two h6' ).html( newval );
        } );
      } );
      wp.customize( 'bb_two_d', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-two p' ).html( newval );
        } );
      } );
      wp.customize( 'bb_three_title', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-three h6' ).html( newval );
        } );
      } );
      wp.customize( 'bb_three_d', function( value ) {
        value.bind( function( newval ) {
          $( '#bb-three p' ).html( newval );
        } );
      } );
      wp.customize( 'section_one_title', function( value ) {
        value.bind( function( newval ) {
          $( '#about h1' ).html( newval );
        } );
      } );
      wp.customize( 'section_one_heading', function( value ) {
        value.bind( function( newval ) {
          $( '#about h2' ).html( newval );
        } );
      } );
      wp.customize( 'about_dection', function( value ) {
        value.bind( function( newval ) {
          $( '#about p' ).html( newval );
        } );
      } );
      wp.customize( 'section_two_title', function( value ) {
        value.bind( function( newval ) {
          $( '#skills h1' ).html( newval );
        } );
      } );
      wp.customize( 'person_one_name', function( value ) {
        value.bind( function( newval ) {
          $( '#Pone h2' ).html( newval );
        } );
      } );
      wp.customize( 'person_one_title', function( value ) {
        value.bind( function( newval ) {
          $( '#Pone p' ).html( newval );
        } );
      } );
      wp.customize( 'person_one_d', function( value ) {
        value.bind( function( newval ) {
          $( '#PoneI p' ).html( newval );
        } );
      } );
      wp.customize( 'person_two_name', function( value ) {
        value.bind( function( newval ) {
          $( '#Ptwo h2' ).html( newval );
        } );
      } );
      wp.customize( 'person_two_title', function( value ) {
        value.bind( function( newval ) {
          $( '#Ptwo p' ).html( newval );
        } );
      } );
      wp.customize( 'person_two_d', function( value ) {
        value.bind( function( newval ) {
          $( '#PtwoI p' ).html( newval );
        } );
      } );
      wp.customize( 'person_three_name', function( value ) {
        value.bind( function( newval ) {
          $( '#Pthree h2' ).html( newval );
        } );
      } );
      wp.customize( 'person_three_title', function( value ) {
        value.bind( function( newval ) {
          $( '#Pthree p' ).html( newval );
        } );
      } );
      wp.customize( 'person_three_d', function( value ) {
        value.bind( function( newval ) {
          $( '#PthreeI p' ).html( newval );
        } );
      } );
      wp.customize( 'person_four_name', function( value ) {
        value.bind( function( newval ) {
          $( '#Pfour h2' ).html( newval );
        } );
      } );
      wp.customize( 'person_four_title', function( value ) {
        value.bind( function( newval ) {
          $( '#Pfour p' ).html( newval );
        } );
      } );
      wp.customize( 'person_four_d', function( value ) {
        value.bind( function( newval ) {
          $( '#PfourI p' ).html( newval );
        } );
      } );
      wp.customize( 'person_five_name', function( value ) {
        value.bind( function( newval ) {
          $( '#Pfive h2' ).html( newval );
        } );
      } );
      wp.customize( 'person_five_title', function( value ) {
        value.bind( function( newval ) {
          $( '#Pfive p' ).html( newval );
        } );
      } );
      wp.customize( 'person_five_d', function( value ) {
        value.bind( function( newval ) {
          $( '#PfiveI p' ).html( newval );
        } );
      } );
      wp.customize( 'section_three_title', function( value ) {
        value.bind( function( newval ) {
          $( '#works h1' ).html( newval );
        } );
      } );
      wp.customize( 'g_p_one_cap', function( value ) {
        value.bind( function( newval ) {
          $( '#gone h2' ).html( newval );
        } );
      } );
      wp.customize( 'section_four_title', function( value ) {
        value.bind( function( newval ) {
          $( '#design h1' ).html( newval );
        } );
      } );
      wp.customize( 's_one_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page1 h3' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_one_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page1 h2' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_one_d', function( value ) {
        value.bind( function( newval ) {
          $( '#page1 p' ).html( newval );
        } );
      } );
      wp.customize( 's_two_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page2 h3' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_two_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page2 h2' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_two_d', function( value ) {
        value.bind( function( newval ) {
          $( '#page2 p' ).html( newval );
        } );
      } );
      wp.customize( 's_three_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page3 h3' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_three_title', function( value ) {
        value.bind( function( newval ) {
          $( '#page3 h2' ).html( newval );
        } );
      } ); 
      wp.customize( 'I_three_d', function( value ) {
        value.bind( function( newval ) {
          $( '#page3 p' ).html( newval );
        } );
      } );
      wp.customize( 'contact_heading', function( value ) {
        value.bind( function( newval ) {
          $( '#contact h1' ).html( newval );
        } );
      } );
      wp.customize( 'contact_title', function( value ) {
        value.bind( function( newval ) {
          $( '#contact h2' ).html( newval );
        } );
      } );
      wp.customize( 'phone_title', function( value ) {
        value.bind( function( newval ) {
          $( '#contact h3' ).html( newval );
        } );
      } );
      wp.customize( 'phone_number', function( value ) {
        value.bind( function( newval ) {
          $( '#contact h4' ).html( newval );
        } );
      } );
      wp.customize( 'phone_number', function( value ) {
        value.bind( function( newval ) {
          $( '#footer-contact .phone' ).html( newval );
        } );
      } ); 
      wp.customize( 'button_text', function( value ) {
        value.bind( function( newval ) {
          $( '#header a' ).html( newval );
        } );
      } );
      wp.customize( 'cp_e_mail', function( value ) {
        value.bind( function( newval ) {
          $( '#email a' ).html( newval );
        } );
      } );
      wp.customize( 'phone_number', function( value ) {
        value.bind( function( newval ) {
          $( '#phone p' ).html( newval );
        } );
      } ); 
      wp.customize( 'cp_s_street', function( value ) {
        value.bind( function( newval ) {
          $( '#streets p' ).html( newval );
        } );
      } ); 
      wp.customize( 'cp_cite_state', function( value ) {
        value.bind( function( newval ) {
          $( '#cite p' ).html( newval );
        } );
      } );
      wp.customize( 'footer_heading', function( value ) {
        value.bind( function( newval ) {
          $( '#fab h3' ).html( newval );
        } );
      } );
      wp.customize( 'f_about_d', function( value ) {
        value.bind( function( newval ) {
          $( '#fab p' ).html( newval );
        } );
      } );                                   

} )( jQuery );