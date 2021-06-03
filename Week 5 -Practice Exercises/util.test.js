const { generateText } = require("./util");

test("Output should be name and age", () => {
	const text = generateText("John Doe", 30);
	expect(text).toBe("John Doe (30 years old)");
});
