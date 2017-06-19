import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ContaintContentComponent } from './containt-content.component';

describe('ContaintContentComponent', () => {
  let component: ContaintContentComponent;
  let fixture: ComponentFixture<ContaintContentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ContaintContentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ContaintContentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
