class TestModule extends Component {

	init() {
		console.log( this.element );
	}
}

TestModule.addComponent( '.test-module' );
