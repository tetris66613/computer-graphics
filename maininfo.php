<!DOCTYPE html>

<div class="info">
  <h1><center>A short history of Computer Graphics</center></h1>
  <h1><center>PreHistory</center></h1>
  <p>The foundations of computer graphics can be traced to artistic and mathematical ``inventions,'' for example, </p>
  <ul type="disc">
    <li>Euclid (circa 300 - 250 BC) who's formulation of geometry provides a basis for graphics concepts. </li>
    <li>Filippo Brunelleschi (1377 - 1446) architect, goldsmith, and sculptor who is noted for his use of perspective. </li>
    <li>Rene Descartés (1596-1650) who developed analytic geometry, in particular coordinate systems which provide a foundation for describing the location and shape of objects in space. </li>
    <li>Gottfried Wilhelm Leibniz (1646 - 1716) and Issac Newton (1642 - 1727) who co-invented calculus that allow us to describe dynamical systems. </li>
    <li>James Joseph Sylvester (1814 - 1897) who invented matrix notation. A lot of graphics can be done with matrices. </li>
    <li>I. Schoenberg who discovered splines, a fundamental type of curve. </li>
    <li>J. Presper Mauchly (1919 - 1995) and John William Mauchly (1907 - 1980) who build the ENIAC computer. </li>
  </ul>
  <h1><center>Early History</center></h1>
  <p>I like to date the history of computer graphics from the Whirlwind Project and the SAGE computer system, which were designed to support military preparedness. The Whirlwind Project started as an effort to build a flight simulator and SAGE was to provide a air defense system in the United States to guard against the threat of a nuclear attack. The SAGE workstation had a vector display and light pens that operators would use pinpoint planes flying over regions of the United States. You can see a SAGE workstation at the Boston Computer Museum. The display is a large radar screen with a wireframe outline of the region being scanned. The light pens are like old large metal drills. A SAGE computer is on display on the corner of ``Hollywood and Vine'' at IBM in Kingston New York. </p>
  <p>More information on these early projects can be found at the URL <a href="http://www.nap.edu/readingroom/books/far/ch4_b1.html">link</a> and <a href="http://rits.stanford.edu/siliconhistory/edwardstour/edwards/card5.html">link</a></p>
  <p>Besides the being the age of the first vacuum tube computers, the 1940's was when the transistor was invented at Bell Labs (1947). In 1956, the first transistorized computer was built at MIT. </p>
  <h1><center>The Age of Sutherland</center></h1>
  <p>In the early 1960's IBM, Sperry-Rand, Burroughs and a few other computer companies existed. The computers of the day had a few kilobytes of memory, no operating systems to speak of and no graphical display monitors. The peripherals were Hollerith punch cards, line printers, and roll-paper plotters. The only programming languages supported were assembler, FORTRAN, and Algol. Function graphs and ``Snoopy'' calendars were about the only graphics done. </p>
  <p>In 1963 Ivan Sutherland presented his paper Sketchpad [1] at the Summer Joint Computer Conference. Sketchpad allowed interactive design on a vector graphics display monitor with a light pen input device. Most people mark this event as the origins of computer graphics. </p>
  <h1><center>The Middle to Late '60's</center></h1>
  <h2>Software and Algorithms</h2>
  <p>Jack Bresenham taught us how to draw lines on a raster device. He later extended this to circles. Anti-aliased lines and curve drawing is a major topic in computer graphics. Larry Roberts pointed out the usefulness of homogeneous coordinates, 4 x 4 matrices and hidden line detection algorithms. Steve Coons introduced parametric surfaces and developed early computer aided geometric design concepts. The earlier work of Pierre Bézier on parametric curves and surfaces also became public. Author Appel at IBM developed hidden surface and shadow algorithms that were pre-cursors to ray tracing. The fast Fourier transform was discovered by Cooley and Tukey. This algorithm allow us to better understand signals and is fundamental for developing antialiasing techniques. It is also a precursor to wavelets.</p>
  <h2>Hardware and Technology</h2>
  <p>Doug Englebart invented the mouse at Xerox PARC. The Evans & Sutherland Corporation and General Electric started building flight simulators with real-time raster graphics. The floppy disk was invented at IBM and the microprocessor was invented at Intel. The concept of a research network, the ARPANET, was developed.</p>
  <h1><center>The Early '70's</center></h1>
  <p>The state of the art in computing was an IBM 360 computer with about 64 KB of memory, a Tektronix 4014 storage tube, or a vector display with a light pen (but these were very expensive). </p>
  <h2>Software and Algorithms</h2>
  <p>Rendering (shading) were discovered by Gouraud and Phong at the University of Utah. Phong also introduced a reflection model that included specular highlights. Keyframe based animation for 3-D graphics was demonstrated. Xerox PARC developed a ``paint'' program. Ed Catmull introduced parametric patch rendering, the z-buffer algorithm, and texture mapping. BASIC, C, and Unix were developed at Dartmouth and Bell Labs. </p>
  <h2>Hardware and Technology</h2>
  <p>An Evans & Sutherland Picture System was the high-end graphics computer. It was a vector display with hardware support for clipping and perspective. Xerox PARC introduced the Altos personal computer, and an 8 bit computer was invented at Intel. </p>
  <h1><center>The Middle to Late '70's</center></h1>
  <h2>Software and Algorithms</h2>
  <p>Turned Whitted developed recursive ray tracing and it became the standard for photorealism, living in a pristine world. Pascal was the programming language everyone learned. </p>
  <h2>Hardware and Technology</h2>
  <p>The Apple I and II computers became the first commercial successes for personal computing. The DEC VAX computer was the mainframe (mini) computer of choice. Arcade games such as Pong and Pac Mac became popular. Laser printers were invented at Xerox PARC. </p>
  <h1><center>The Early '80's</center></h1>
  <h2>Software and Algorithms</h2>
  <h2>Hardware and Technology</h2>
  <p>The IBM PC was marketed in 1981 The Apple MacIntosh started production in 1984, and microprocessors began to take off, with the Intel x86 chipset, but these were still toys. Computers with a mouse, bitmapped (raster) display, and Ethernet became the standard in academic and science and engineering settings. </p>
  <h1><center>The Middle to Late '80's</center></h1>
  <h2>Software and Algorithms</h2>
  <p>Jim Blinn introduces blobby models and texture mapping concepts. Binary space partitioning (BSP) trees were introduced as a data structure, but not many realized how useful they would become. Loren Carpenter starting exploring fractals in computer graphics. Postscript was developed by John Warnock and Adobe was formed. Steve Cook introduced stochastic sampling to ray tracing. Paul Heckbert taught us to ray trace Jello©(this is a joke;) Character animation became the goal for animators. Radiosity was introduced by the Greenberg and folks at Cornell. Photoshop was marketed by Adobe. Video arcade games took off, many people/organizations started publishing on the desktop. Unix and X windows were the platforms of choice with programming in C and C++, but MS-DOS was starting to rise. </p>
  <h2>Hardware and Technology</h2>
  <p>Sun workstations, with the Motorola 680x0 chipset became popular as advanced workstation a in the mid 80's. The Video Graphics Array (VGA) card was invented at IBM. Silicon Graphics (SGI) workstations that supported real-time raster line drawing and later polygons became the computer graphicists desired. The data glove, a precursor to virtual reality, was invented at NASA. VLSI for special purpose graphics processors and parallel processing became hot research areas. </p>
  <h1><center>The Early '90's</center></h1>
  <p>The computer to have now was an SGI workstation with at least 16 MB of memory, at 24-bit raster display with hardware support for Gouraud shading and z-buffering for hidden surface removal. Laser printers and single frame video recorders were standard. Unix, X and Silicon Graphics GL were the operating systems, window system and application programming interface (API) that graphicist used. Shaded raster graphics were starting to be introduced in motion pictures. PCs started to get decent, but still they could not support 3-D graphics, so most programmer's wrote software for scan conversion (rasterization) used the painter's algorithm for hidden surface removal, and developed ``tricks'' for real-time animation. </p>
  <h2>Software and Algorithms</h2>
  <p>Mosaic, the first graphical Internet browser was written by xxx at the University of Illinois, National Center for Scientific Applications (NCSA). MPEG standards for compressed video began to be promulgated. Dynamical systems (physically based modeling) that allowed animation with collisions, gravity, friction, and cause and effects were introduced. In 1992 OpenGL became the standard for graphics APIs In 1993, the World Wide Web took off. Surface subdivision algorithms were rediscovered. Wavelets begin to be used in computer graphics. </p>
  <h2>Hardware and Technology</h2>
  <p>Hand-held computers were invented at Hewlett-Packard about 1991. Zip drives were invented at Iomega. The Intel 486 chipset allowed PC to get reasonable floating point performance. In 1994, Silicon Graphics produced the Reality Engine: It had hardware for real-time texture mapping. The Ninetendo 64 game console hit the market providing Reality Engine-like graphics for the masses of games players. Scanners were introduced. </p>
  <h1><center>The Middle to Late '90's</center></h1>
  <p>The PC market erupts and supercomputers begin to wane. Microsoft grows, Apple collapses, but begins to come back, SGI collapses, and lots of new startups enter the graphics field. </p>
  <h2>Software and Algorithms</h2>
  <p>Image based rendering became the area for research in photo-realistic graphics. Linux and open source software become popular. </p>
  <h2>Hardware and Technology</h2>
  <p> PC graphics cards, for example 3dfx and Nvidia, were introduced. Laptops were introduced to the market. The Pentium chipset makes PCs almost as powerful as workstations. Motion capture, begun with the data glove, becomes a primary method for generating animation sequences. 3-D video games become very popular: DOOM (which uses BSP trees), Quake, Mario Brothers, etc. Graphics effects in movies becomes pervasive: Terminator 2, Jurassic Park, Toy Story, Titanic, Star Wars I. Virtual reality and the Virtual Reality Meta (Markup) Language (VRML) become hot areas for research. PDA's, the Palm Pilot, and flat panel displays hit the market.

</p>
  <h1><center>The '00's</center></h1>
  <p>Today most graphicist want an Intel PC with at least 256 MB of memory and a 10 GB hard drive. Their display should have graphics board that supports real-time texture mapping. A flatbed scanner, color laser printer, digital video camera, DVD, and MPEG encoder/decoder are the peripherals one wants. The environment for program development is most likely Windows and Linux, with Direct 3D and OpenGL, but Java 3D might become more important. Programs would typically be written in C++ or Java. </p>
  <p>What will happen in the near future -- difficult to say, but high definition TV (HDTV) is poised to take off (after years of hype). Ubiquitous, untethered, wireless computing should become widespread, and audio and gestural input devices should replace some of the functionality of the keyboard and mouse. </p>
  <p>You should expect 3-D modeling and video editing for the masses, computer vision for robotic devices and capture facial expressions, and realistic rendering of difficult things like a human face, hair, and water. With any luck C++ will fall out of favor. </p>

</div>
