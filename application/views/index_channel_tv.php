<div class="latest-focus">
	<div class="focusTop">
		<div id="focus">
			<ul>
				<li><a href="/search.php?searchword=战旗"><img src="<?php echo $img_url;?>focus/1.jpg" alt="王雷演绎战地英豪，那段战火纷飞的年代（每晚3集)" _alt="战旗" /></a></li>
				<li><a href="/search.php?searchword=消失的子弹"><img src="<?php echo $img_url;?>focus/2.jpg" alt="锋云对决上演民国第一奇案,结局难料迷雾重重" _alt="消失的子弹" /></a></li>
				<li><a href="/search.php?searchword=麻辣女兵"><img src="<?php echo $img_url;?>focus/3.jpg" alt="叛逆少女打造热血青春，女版士兵突击（每晚3集）" _alt="麻辣女兵" /></a></li>
				<li><a href="/search.php?searchword=姐姐立正向前走"><img src="<?php echo $img_url;?>focus/4.jpg" alt="林心如，汪东城演绎荧幕姐弟恋" _alt="姐姐立正向前走" /></a></li>
				<li><a href="/search.php?searchword=大太监"><img src="<?php echo $img_url;?>focus/5.jpg" alt="双料视帝演绎忠仆李莲英成长记，大尺度重口味" _alt="大太监" /></a></li>
				<li><a href="/search.php?searchword="><img src="<?php echo $img_url;?>focus/6.jpg" alt="殷桃张译演绎改革开放的温州变化（大结局）" _alt="温州一家人" /></a></li>
			</ul>
		</div>
		<div class="focus-ft">
			<ul id="focustag-li" class="tit">
				<li onMouseOver="focusTag(0);" class="on"><span class="first">热榜</span></li>
				<li onMouseOver="focusTag(1);"><span>大陆</span></li>
				<li onMouseOver="focusTag(2);"><span>港台</span></li>
				<li onMouseOver="focusTag(3);"><span>日韩</span></li>
				<li onMouseOver="focusTag(4);"><span>欧美</span></li>
			</ul>
			<div id="focustag-content">
				<ul class="list">
					{pipicms:videolist type=2 num=10 order=hit}
					<li><a href="[videolist:link]" title="[videolist:name]"><em class="no[videolist:n]">[videolist:n]</em><span class="name">[videolist:name]</span><span class="type">[videolist:typename]</span></a></li>
					{/pipicms:videolist}
				</ul>
				<ul class="list hide">
					{pipicms:videolist type=13 num=10 order=time}
					<li><a href="[videolist:link]" title="[videolist:name]"><em class="no[videolist:n]">[videolist:n]</em><span class="name">[videolist:name]</span><span class="type">至<span class="red_num">[videolist:note]</span></span></a></li>
					{/pipicms:videolist}
				</ul>
				<ul class="list hide">
					{pipicms:videolist type=14 num=10 order=time}
					<li><a href="[videolist:link]" title="[videolist:name]"><em class="no[videolist:n]">[videolist:n]</em><span class="name">[videolist:name]</span><span class="type">至<span class="red_num">[videolist:note]</span></span></a></li>
					{/pipicms:videolist}
				</ul>
				<ul class="list hide">
					{pipicms:videolist type=15 num=10 order=time}
					<li><a href="[videolist:link]" title="[videolist:name]"><em class="no[videolist:n]">[videolist:n]</em><span class="name">[videolist:name]</span><span class="type">至<span class="red_num">[videolist:note]</span></span></a></li>
					{/pipicms:videolist}
				</ul>
				<ul class="list hide">
					{pipicms:videolist type=16 num=10 order=time}
					<li><a href="[videolist:link]" title="[videolist:name]"><em class="no[videolist:n]">[videolist:n]</em><span class="name">[videolist:name]</span><span class="type">至<span class="red_num">[videolist:note]</span></span></a></li>
					{/pipicms:videolist}
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="wrap w960">
	<div class="maxBox mb10">
		<div class="box">
			<div class="tips">当前位置：{channelpage:typetext}</div>
		</div>
	</div>
	<div class="ad960 mt10 mb10">954*80 顶部广告位</div>
	<div class="select_list"> <span class="select_list_sTit select_list_sTV"></span>
		<dl class="select_list_style">
			<dt><span>按地区</span></dt>
			<dd> {pipicms:areacaslist}<a href='[areacaslist:link]&tid={pipicms:currenttypeid}'>[areacaslist:value]</a>{/pipicms:areacaslist} </dd>
		</dl>
		<dl class="select_list_address">
			<dt><span>按年份</span></dt>
			<dd><a href='/search.php?searchtype=5&year=2013&tid=2'>2013</a><a href='/search.php?searchtype=5&year=2012&tid=2'>2012</a><a href='/search.php?searchtype=5&year=2011&tid=2'>2011</a><a href='/search.php?searchtype=5&year=2010&tid=2'>2010</a><a href='/search.php?searchtype=5&year=2009&tid=2'>2009</a><a href='/search.php?searchtype=5&year=2008&tid=2'>2008</a><a href='/search.php?searchtype=5&year=2007&tid=2'>2007</a><a href='/search.php?searchtype=5&year=2006&tid=2'>2006</a><a href='/search.php?searchtype=5&year=2005&tid=2'>2005</a></dd>
		</dl>
		<dl class="select_list_year">
			<dt><span>按语言</span></dt>
			<dd> {pipicms:langcaslist}<a href='[langcaslist:link]&tid={pipicms:currenttypeid}'>[langcaslist:value]</a>{/pipicms:langcaslist} </dd>
		</dl>
		<dl class="select_list_star" name="mingxing" id="mingxing" style="display: block; ">
			<dt><span>荧幕明星</span><em>(热)</em><a href="javascript:Rmingxing(0);" name="change_star" id="change_star" class="star_changeBtn" target="_self">换一换</a></dt>
			<dd> </dd>
			<script language="javascript" type="text/javascript">Rmingxing(0);</script>
		</dl>
		<dl class="people_all_watch">
			<dt><span>大家都在看：</span></dt>
			<dd> <span><a href="#">自行添加</a></span> <span><a href="#">自行添加</a></span> <span><a href="#">自行添加</a></span> </dd>
		</dl>
	</div>
	<div class="maxBox lb mb10 mt5">
		<div class="cntBox fa-left">
			<div class="conBox">
				<div class="box">
					<div class="caption bigCaption fa-clear">
						{pipicms:menulist type=13}
						<h2 class="hide-self fa-left">[menulist:typename]</h2>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="pic-list">
							{pipicms:videolist type=13 num=5 order=time}
							<li><a class="play-pic" href="[videolist:link]" title="[videolist:name]"><img src="[videolist:pic]" style="display: block;"><span class="play-icon">&nbsp;</span>
								<label class="bg">&nbsp;</label>
								<label class="time">[videolist:note]</label>
								</a>
								<p><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></p>
								<p class="txt">[videolist:nolinkactor]</p>
							</li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cntBar fa-right">
			<div class="sideRow">
				<div class="box">
					<div class="caption fa-clear">
						{pipicms:menulist type=13}
						<h3 class="hide-self fa-left">[menulist:typename]最近排行</h3>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="ul-top">
							{pipicms:videolist type=13 num=7 order=hit}
							<li><span><strong>[videolist:time]</strong></span><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="maxBox lb mb10">
		<div class="cntBox fa-left">
			<div class="conBox">
				<div class="box">
					<div class="caption bigCaption fa-clear">
						{pipicms:menulist type=14}
						<h2 class="hide-self fa-left">[menulist:typename]</h2>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="pic-list">
							{pipicms:videolist type=14 num=5 order=time}
							<li><a class="play-pic" href="[videolist:link]" title="[videolist:name]"><img src="[videolist:pic]" style="display: block;"><span class="play-icon">&nbsp;</span>
								<label class="bg">&nbsp;</label>
								<label class="time">[videolist:note]</label>
								</a>
								<p><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></p>
								<p class="txt">[videolist:nolinkactor]</p>
							</li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cntBar fa-right">
			<div class="sideRow">
				<div class="box">
					<div class="caption fa-clear">
						{pipicms:menulist type=14}
						<h3 class="hide-self fa-left">[menulist:typename]最近排行</h3>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="ul-top">
							{pipicms:videolist type=14 num=7 order=hit}
							<li><span><strong>[videolist:time]</strong></span><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="maxBox lb mb10">
		<div class="cntBox fa-left">
			<div class="conBox">
				<div class="box">
					<div class="caption bigCaption fa-clear">
						{pipicms:menulist type=15}
						<h2 class="hide-self fa-left">[menulist:typename]</h2>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="pic-list">
							{pipicms:videolist type=15 num=5 order=time}
							<li><a class="play-pic" href="[videolist:link]" title="[videolist:name]"><img src="[videolist:pic]" style="display: block;"><span class="play-icon">&nbsp;</span>
								<label class="bg">&nbsp;</label>
								<label class="time">[videolist:note]</label>
								</a>
								<p><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></p>
								<p class="txt">[videolist:nolinkactor]</p>
							</li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cntBar fa-right">
			<div class="sideRow">
				<div class="box">
					<div class="caption fa-clear">
						{pipicms:menulist type=15}
						<h3 class="hide-self fa-left">[menulist:typename]最近排行</h3>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="ul-top">
							{pipicms:videolist type=15 num=7 order=hit}
							<li><span><strong>[videolist:time]</strong></span><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="maxBox lb mb10">
		<div class="cntBox fa-left">
			<div class="conBox">
				<div class="box">
					<div class="caption bigCaption fa-clear">
						{pipicms:menulist type=16}
						<h2 class="hide-self fa-left">[menulist:typename]</h2>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="pic-list">
							{pipicms:videolist type=16 num=5 order=time}
							<li><a class="play-pic" href="[videolist:link]" title="[videolist:name]"><img src="[videolist:pic]" style="display: block;"><span class="play-icon">&nbsp;</span>
								<label class="bg">&nbsp;</label>
								<label class="time">[videolist:note]</label>
								</a>
								<p><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></p>
								<p class="txt">[videolist:nolinkactor]</p>
							</li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cntBar fa-right">
			<div class="sideRow">
				<div class="box">
					<div class="caption fa-clear">
						{pipicms:menulist type=16}
						<h3 class="hide-self fa-left">[menulist:typename]最近排行</h3>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="ul-top">
							{pipicms:videolist type=16 num=7 order=hit}
							<li><span><strong>[videolist:time]</strong></span><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="maxBox lb mb10">
		<div class="cntBox fa-left">
			<div class="conBox">
				<div class="box">
					<div class="caption bigCaption fa-clear">
						{pipicms:menulist type=28}
						<h2 class="hide-self fa-left">[menulist:typename]</h2>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="pic-list">
							{pipicms:videolist type=28 num=5 order=time}
							<li><a class="play-pic" href="[videolist:link]" title="[videolist:name]"><img src="[videolist:pic]" style="display: block;"><span class="play-icon">&nbsp;</span>
								<label class="bg">&nbsp;</label>
								<label class="time">[videolist:note]</label>
								</a>
								<p><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></p>
								<p class="txt">[videolist:nolinkactor]</p>
							</li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cntBar fa-right">
			<div class="sideRow">
				<div class="box">
					<div class="caption fa-clear">
						{pipicms:menulist type=28}
						<h3 class="hide-self fa-left">[menulist:typename]最近排行</h3>
						<span><a href="[menulist:link]">更多</a></span>{/pipicms:menulist}</div>
					<div class="content">
						<ul class="ul-top">
							{pipicms:videolist type=28 num=7 order=hit}
							<li><span><strong>[videolist:time]</strong></span><a href="[videolist:link]" title="[videolist:name]">[videolist:name]</a></li>
							{/pipicms:videolist}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ad960 mt10">954*80 底部广告位</div>
</div>
<script type="text/javascript" src="<?php echo $js_url;?>focus.js"></script>
<!--网站底部-->
