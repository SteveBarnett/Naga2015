<!DOCTYPE html>
<html lang="en" class="no-js">

  <?php include("header.php"); ?>

<body>

	<article id="post-1355" class="hentry">
		<header>
			<h2 class="entry-title"><a href="http://naga.co.za/2015/09/14/code-prototype-vs-production/" title="Permalink to Code: prototype vs production" rel="bookmark">Code: prototype vs production</a></h2>

			<time class="entry-date updated" datetime="2015-09-14T08:04:56+00:00" pubdate="">September 14, 2015</time>
		</header>

		<div class="entry-content">
			<p>I’m a big fan of making prototypes as part of a <a href="http://naga.co.za/2015/08/20/user-centered-design-process-2/">User-Centered Design process</a>. I even prefer to skip doing wireframes entirely and instead use sketches, (heavily annotated) prototypes (that have been tested with users), and Style Tiles to start work on a Front-end Style Guide. For this work, a designer and a developer need to work closely together, so it can sometimes be hard to do.</p>
			<p>I prefer more interactive prototypes that let you <em>do stuff</em> rather than the clickable-hot-spot prototypes that most tools offer. Since I’m a Front-end Developer, I like to make those prototypes myself in HTML, CSS, and JavaScript, rather than using a tool to do so. To make sure that I can make the prototypes quickly, I’ll often use a framework like <a href="http://getbootstrap.com/">Bootstrap</a> or <a href="http://foundation.zurb.com/index.html">Foundation</a>.</p>
			<h3 id="throwawayprototypecode">Throw away prototype code</h3>
			<p>This code is written just for testing the prototype, and won’t be used in production, so I let myself be a bit sloppy (e.g. don’t write tests). For the prototype <strong>how it works</strong> is more important the code quality. Another reason the prototype code doesn’t make it to the live site is because <strong>frameworks like Bootstrap and Foundation tend to be quite heavy</strong> in terms of size. There are tools like <a href="https://github.com/giakki/uncss">unCSS</a> that can remove unused CSS, but I’ve have mixed results with them. It feels a little like fixing the symptom rather than the problem: I’d rather write less CSS in the first place, and have a simpler code base with lots of reusable modules.</p>
			<h3 id="zurbsfoundation">Zurb’s Foundation</h3>
			<p><a href="http://zurb.com/article/1403/foundation-6-prototype-to-production">Foundation 6, Prototype to Production</a> on the Zurb blog is a very interesting read. They set out a clear set of principles that guide the decisions they make about Foundation for both prototype and production use. The most exciting part for me is the focus on Front-end performance, starting with a lighter Theme and file size: </p>
			<blockquote>
			<p>We’re approaching this problem two fold with Foundation 6 by styling the already minimal framework less from the start and giving users easier tools to strip files themselves.</p>
			</blockquote>
			<p>I’m still not sure I’d use a framework like this for production code, and I certainly wouldn’t want to use my sloppy prototype code in production, but it is awesome to see Zurb trimming down their framework and giving more power to developers to pick out just the bits they want.</p>
		</div><!-- .entry-content -->

	</article>

</body>

</html>
