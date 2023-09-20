import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { faStar } from '@fortawesome/free-solid-svg-icons';
import { RestaurantsService } from 'src/app/services/restaurants.service';

@Component({
  selector: 'app-home-page',
  templateUrl: './home-page.component.html',
  styleUrls: ['./home-page.component.css']
})
export class HomePageComponent {
  arrLoved:any=[];
  first:string="";
  flikes:number=0;
  slikes:number=0;
  tlikes:number=0;
  second:string="";
  third:string="";
  testList:any=[];
  faStar = faStar;
  constructor(private rs:RestaurantsService, private router: Router){}
  
  ngOnInit(){
    this.rs.getRestaurants().subscribe((res)=>{
      this.arrLoved=res;
      this.arrLoved.sort(function(a:any,b:any){
        return parseInt(b.likes)-parseInt(a.likes);
      });
      this.first=this.arrLoved[0].name;
      this.second=this.arrLoved[1].name;
      this.third=this.arrLoved[2].name;
      this.flikes=this.arrLoved[0].likes;
      this.slikes=this.arrLoved[1].likes;
      this.tlikes=this.arrLoved[2].likes;
    });
    this.rs.getTestimonials().subscribe((res)=>{
      this.testList=res;
    });

  };


}
