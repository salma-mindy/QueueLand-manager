import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CltDashboardComponent } from './clt-dashboard.component';

describe('CltDashboardComponent', () => {
  let component: CltDashboardComponent;
  let fixture: ComponentFixture<CltDashboardComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CltDashboardComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CltDashboardComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
