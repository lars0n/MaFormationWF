import { ActualeventAppPage } from './app.po';

describe('actualevent-app App', () => {
  let page: ActualeventAppPage;

  beforeEach(() => {
    page = new ActualeventAppPage();
  });

  it('should display welcome message', done => {
    page.navigateTo();
    page.getParagraphText()
      .then(msg => expect(msg).toEqual('Welcome to app!!'))
      .then(done, done.fail);
  });
});
